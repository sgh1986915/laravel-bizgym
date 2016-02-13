<?php

use Saas\Acl\Annotations\AclMap;
use Saas\Message\Models\Alert;
use Illuminate\Filesystem\Filesystem;
use Upload\Storage\FileSystem as UploadFileSystem;
use Upload\File as UploadFile;
use Upload\Validation\Mimetype as UploadMimetype;
use Upload\Validation\Size as UploadSize;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;

/**
 * Attachment controller
 *
 * @AclMap(name="attachment")
 */

class AttachmentController extends BaseController 
{
	/**
	 * @var string base folder attachment
	 */
	protected $directory; 

	/**
	 * @var string base media folder attachment
	 */
	protected $media_directory; 

	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();

		$this->directory = app_path().'/storage/attachment';
		$this->media_directory = app_path().'/storage/attachment/media';

		$this->ensureAttachmentFolder();
	}

	/**
	 * Handle user media images
	 *
	 * @param string (profile/cover)
	 * @param int 
	 * @return image
	 * @AclMap(name="user_media",config={"except":"banned"},insufficient_message="acl.banned")
	 */
	public function showUserImage($type, $user_id = 0)
	{
		$user = User::find($user_id);

		if ( ! in_array($type, array('profile', 'cover')) || !$user) {
			App::abort(404);
		}

		// Process size request
		$size = Input::get('size', 'normal');
		switch ($size) {
			case 'mini':
				$dimension = array(24,24);
				break;

			case 'small':
				$dimension = array(40,40);
				break;
			
			default:
				$dimension = ($type == 'profile') ? array(140,140) : array(350,150);
				break;
		}

		$found = false;
		$mime = 'image/jpg';
		$image = '';

		foreach ($user->attachments as $attachment) {
			if (strpos($attachment->pivot->type, $type) !== false) {
				$found = true;
				break;
			}
		}

		if ( ! $found) {
			switch ($type) {
				case 'profile':
					// Failover to gravatar
					$hash = md5($user->email);
					$url = 'http://www.gravatar.com/avatar/'.$hash.'?s='.current($dimension);
					break;
				
				default:
					// Failover to placehold.it
					$url = 'http://placehold.it/'.implode('x', $dimension);
					break;
			}

			$image = file_get_contents($url);
		} else {
			$fs = new Filesystem();

			$file = $attachment->path;
			$mime = $attachment->mime;
			list($name,$ext) = explode('.', $file);

			if ( ! $fs->exists($file)) App::abort(500);

			// Process attachment
			$selectedSize = implode('x', $dimension);
			$requestedFile = $name.$selectedSize.'.'.$ext;

			if ( ! $fs->exists($requestedFile)) {
				// Need to create one
				$imagine = new Imagine();
				$size = new Box($dimension[0], $dimension[1]);
				$mode = ImageInterface::THUMBNAIL_OUTBOUND;

				$imagine->open($file)
						->thumbnail($size, $mode)	
						->save($requestedFile);
			}

			$image = file_get_contents($requestedFile);
		}

		// Dump-out the response
		header('Content-Type: '.$mime);
		die($image);
	}

	/**
	 * Handle user media upload attachment
	 *
	 * @AclMap(name="user_attachment",config={"except":"guest,banned"},insufficient_message="acl.insufficient")
	 */
	public function postUser($user_id = 0)
	{
        //TODO: add support or route for current user in addition to specifying user id.
		return $this->postMedia('user', $user_id);
	}

	/**
	 * Helper to ensure attachment folder
	 */
	protected function ensureAttachmentFolder()
	{
		$file = new Filesystem();

		// Ensure base folder
		if ( ! $file->isDirectory($this->directory)) {
			$file->makeDirectory($this->directory, 0777, true);
		}

		// Ensure media folder
		if ( ! $file->isDirectory($this->media_directory)) {
			$file->makeDirectory($this->media_directory, 0777, true);
		}

		if ( ! $file->isWritable($this->directory) || ! $file->isWritable($this->media_directory)) {
			throw new RuntimeException('Invalid attachment directory');
		}
	}

	/**
	 * Handle message media images
	 *
	 * @param string (alert/...)
	 * @param int 
	 * @return image
	 * @AclMap(name="message_media",config={"except":"banned"},insufficient_message="acl.banned")
	 */
	public function showMessageImage($type, $message_id = 0)
	{
		$message = Alert::find($message_id);

		if ( ! in_array($type, array('alert')) || !$message) {
			App::abort(404);
		}

		// Process size request
		$size = Input::get('size', 'normal');
		switch ($size) {
			case 'mini':
				$dimension = array(24,24);
				break;
			
			default:
				$dimension = ($type == 'alert') ? array(150,150) : array(100,100);
				break;
		}

		$found = false;
		$mime = 'image/jpg';
		$image = '';

		foreach ($message->attachments as $attachment) {
			if (strpos($attachment->pivot->type, $type) !== false) {
				$found = true;
				break;
			}
		}

		if ( ! $found) {
			switch ($type) {
				default:
					// Failover to placehold.it
					$url = 'http://placehold.it/'.implode('x', $dimension);
					break;
			}

			$image = file_get_contents($url);
		} else {
			$fs = new Filesystem();

			$file = $attachment->path;
			$mime = $attachment->mime;
			list($name,$ext) = explode('.', $file);

			if ( ! $fs->exists($file)) App::abort(500);

			// Process attachment
			$selectedSize = implode('x', $dimension);
			$requestedFile = $name.$selectedSize.'.'.$ext;

			if ( ! $fs->exists($requestedFile)) {
				// Need to create one
				$imagine = new Imagine();
				$size = new Box($dimension[0], $dimension[1]);
				$mode = ImageInterface::THUMBNAIL_OUTBOUND;

				$imagine->open($file)
						->thumbnail($size, $mode)	
						->save($requestedFile);
			}

			$image = file_get_contents($requestedFile);
		}

		// Dump-out the response
		header('Content-Type: '.$mime);
		die($image);
	}

    /**
     * Handle user media images
     *
     * @param string (logo/cover)
     * @param int
     * @return image
     * @AclMap(name="brand_media",config={"except":"banned"},insufficient_message="acl.banned")
     */
    public function showBrandImage($type, $brand_id = 0)
    {
        $brand = Brand::find($brand_id);

        if ( ! in_array($type, array('logo', 'cover')) || !$brand) {
            App::abort(404);
        }

        // Process size request
        $size = Input::get('size', 'normal');
        switch ($size) {
            case 'mini':
                $dimension = array(24,24);
                break;

            case 'small':
                $dimension = array(50,50);
                break;

            default:
                $dimension = ($type == 'logo') ? array(200,200) : array(350,150);
                break;
        }

        $found = false;
        $mime = 'image/jpg';
        $image = '';

        foreach ($brand->attachments as $attachment) {
            if (strpos($attachment->pivot->type, $type) !== false) {
                $found = true;
                break;
            }
        }

        if ( ! $found) {
            // Failover to placehold.it
            $url = 'http://placehold.it/'.implode('x', $dimension);
            $image = file_get_contents($url);
        } else {
            $fs = new Filesystem();

            $file = $attachment->path;
            $mime = $attachment->mime;
            list($name,$ext) = explode('.', $file);

            if ( ! $fs->exists($file)) App::abort(500);

            // Process attachment
            $selectedSize = implode('x', $dimension);
            $requestedFile = $name.$selectedSize.'.'.$ext;

            if ( ! $fs->exists($requestedFile)) {
                // Need to create one
                $imagine = new Imagine();
                $size = new Box($dimension[0], $dimension[1]);
                $mode = ImageInterface::THUMBNAIL_OUTBOUND;

                $imagine->open($file)
                    ->thumbnail($size, $mode)
                    ->save($requestedFile);
            }

            $image = file_get_contents($requestedFile);
        }

        // Dump-out the response
        header('Content-Type: '.$mime);
        die($image);
    }

    /**
     * Handle message media upload attachment
     *
     * @AclMap(name="message_attachment",config={"except":"guest,banned"},insufficient_message="acl.insufficient")
     */
    public function postMessage($message_id = 0)
    {
        return $this->postMedia('message', $message_id);
    }

    /**
     * Handle brand media upload attachment
     *
     * @AclMap(name="brand_attachment",config={"except":"guest,banned"},insufficient_message="acl.insufficient")
     */
    public function postBrand($brand_id = 0)
    {
        return $this->postMedia('brand', $brand_id);
    }

	/**
	 * Main media upload API
	 */
	protected function postMedia($mediaType = 'user', $item_id = 0)
	{
		// Get corresponding item
		switch ($mediaType) {
			case 'message':
				$item = Alert::find($item_id);
				$allowedTypes = array('alert_picture');
				break;

            case 'user':
                $item = User::find($item_id);
                $allowedTypes = array('profile_picture', 'cover_picture');
                break;

            case 'brand':
                $item = Brand::find($item_id);
                $allowedTypes = array('logo_picture', 'cover_picture');
                break;
			
			default:
				throw new Exception('Invalid media type:'.$mediaType);
				break;
		}

		if ( ! $item) App::abort(404);

		// Gathering and validate upload information
		$uploadFiles = Input::file();
		$uploadType = key($uploadFiles);

		if ( ! Input::hasFile($uploadType)) {
			array_shift($uploadFiles);
			$uploadType = key($uploadFiles);
		}

		if (! in_array($uploadType, $allowedTypes)) {
			return Redirect::back()->with('warning', 'Invalid upload name : '.$uploadType);
		}

		// Early mime validation
		$validType = false;
		if ($mime = Input::file($uploadType)->getMimetype()) {
			$validType = strpos($mime,'image') === 0;
		}

		if ( ! $validType) {
			return Redirect::back()->with('warning', 'Invalid mime type : '.$mime);
		}

		// Prepare uploader
		$fs = new Filesystem();
		$storage = new UploadFileSystem($this->media_directory);
		$file = new UploadFile($uploadType, $storage);

		// Set to item's media slug
		$mediaName = $uploadType.'_'.$mediaType.'_'.$item->id;
		$file->setName($mediaName);

		// Validate file upload
		// MimeType List => http://www.webmaster-toolkit.com/mime-types.shtml
		$file->addValidations(array(
			new UploadMimetype($mime),
			new UploadSize('5M'),
		));

		// Access data about the file that has been uploaded
		$data = array(
			'path' => $this->media_directory.'/'.$file->getNameWithExtension(),
			'name' => $file->getNameWithExtension(),
			'extension' => $file->getExtension(),
			'mime' => $file->getMimetype(),
			'size' => $file->getSize(),
			'md5' => $file->getMd5(),
			'dimensions' => $file->getDimensions(),
		);

		// Try to upload file
		try {
			// If it already there, remove
			if ($fs->exists($data['path'])) {
				$fs->delete($data['path']);
			}

			$file->upload();
			chmod($data['path'], 0777); //why not 0644 or 0664

			$attachment = Attachment::create(array(
				'mime' => $data['mime'],
				'path' => $data['path'],
				'url' => URL::to('/media/'.$mediaType.'/'.$uploadType.'/'.$item->id),
			));

			foreach ($item->attachments as $previousAttachment) {
				if ($previousAttachment->pivot->type == $uploadType) {
					$item->attachments()->detach($previousAttachment->id);
				}
			}

			$item->attachments()->save($attachment, array('type' => $uploadType));

			return Redirect::back();
		} catch (Exception $e) {

			// Fail!
			$error = $file->getErrors();
			return Redirect::back()->with('warning', current($error));
		}
	}

}