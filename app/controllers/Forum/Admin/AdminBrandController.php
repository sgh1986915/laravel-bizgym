<?php
use \Redirect;

class AdminBrandController extends BaseController
{
    public $restful = true;
    
    // Filter
    public function __constructor()
    {
        $this->filter('before', 'csrf')->on('post');
        //
    }

    public function get_index()
    {
        try
        {
            $title = Input::get('title');
            $status = Input::get('status');
        
            $brand = DB::table('brand');
            // 
            if($title)
            {
                $brand = $brand->where('title','LIKE','%'.$title.'%');
            }
    
            if($status)
            {   
                if($status == 3)
                {
                    $status = 0;

                }
                $brand = $brand->where('discovery', '=', $status);

            }

            $brand =  $brand->order_by('brand.created_at')->paginate(25);

            foreach($brand->results as $key => &$value)
            {
                $plan = RefUserBrandSubscription::where('brand_id', '=', $value->id)->order_by('created_at')->first();

                if(empty($plan))
                {
                    continue;
                }

                $value->name = $plan->plan->name;
                $value->plan_start_date = $plan->plan_start_date;
                $value->plan_end_date = $plan->plan_end_date;
            }
        }
        catch(Sentry\SentryException $e)
        {
            return View::make('admin/brand/index')->with('errors', $e->getMessage());
        }

        return View::make('admin/brand/index')->with('brand', $brand);
    }
     public function get_new()
    {
        
        return View::make('admin/brand/new');
    }
    public function post_new()
    {
        // Assign Variables
        $fields = array(
            "title" 	       => Input::get('title'),
            "description"      => Input::get('description'),
            "slug"             => Input::get('slug'),
            "discovery"        => Input::get('discovery'),
            'active'           => Input::get('active'),
        );

        // Create Rules
        $rules = array(
            'title' => 'required|unique:brand',
            'slug' => 'required|unique:brand'
        );


        // Validator
        $v = Validator::make($fields, $rules);
        if($v->fails())
        {
            return Redirect::to('admin/brand/new')->with_errors($v)->with_input();
        }

        $imagethumb = $this->ImageCrop('imagethumb','brand',300,200,'');
        $imagelarge = $this->ImageCrop('imagelarge','brand',800,600,'');
        $fields['image_thumb'] = $imagethumb;
        $fields['image_large'] = $imagelarge;


        // let save it.
        DB::table('brand')->insert($fields);

        return Redirect::to_route('brand_admin')->with('message', 'Brand created successfully');
    }

    public function get_edit()
    {
        $id = URI::segment(3);
        $brand = DB::table('brand')->find($id);
    
        return View::make('admin/brand/edit')->with('brand',$brand);
    }
    public function post_edit()
    {
        // Assign Variables
        $fields = array(
            "title" 	    => Input::get('title'),
            "description"   => Input::get('description'),
            "slug"          => Input::get('slug'),
            "discovery"     => Input::get('discovery'),
            'active'        => Input::get('active')
        );

        // Create Rules
        $rules = array(
            'title' => 'required|unique:brand,title,'.Input::get('id'),
            'slug'  => 'required|unique:brand,slug,'.Input::get('id')
        );

        // Validator
        $v = Validator::make($fields, $rules);
        if($v->fails())
        {
            return Redirect::back()->with_errors($v)->with_input();
        }


        $imagethumb = $this->ImageCrop('imagethumb','brand',300,200,'');
        $imagelarge = $this->ImageCrop('imagelarge','brand',800,600,'');

        if(Input::file('imagethumb.name'))
        {    
           $fields['image_thumb'] = $imagethumb;
        }
        if(Input::file('imagelarge.name'))
        {
           $fields['image_large'] = $imagelarge;
            
        }
        //save
        DB::table('brand')->where('id','=',Input::get('id'))
        			      ->update($fields);
        // Redirect
        return Redirect::to_route('brand_admin')->with('message', 'Brand created successfully'); 
    }
    public function get_delete()
    {
    	$affected = DB::table('brand')->where('id', '=', URI::segment(3))->delete();
    	return Redirect::to_route('brand_admin')->with('message', 'Brand deleted successfully'); 
    }

    public function get_activity($brand_id)
    {

        $brand_data = brand::find($brand_id, array('title'));

        $campaigns = BrandCampaign::where('brand_campaign.brand_id', '=', $brand_id)
            ->left_join('campaign', 'campaign.id', '=', 'brand_campaign.campaign_id')
            ->left_join('campaign_author', 'campaign_author.id', '=', 'campaign.author_id')
            ->get(array('brand_campaign.*', 'campaign.campaign_title', 'campaign.author_id',
                    'campaign.campaign_rating', 'campaign.campaign_price', 'campaign.campaign_status',
                    'campaign.created_at', 'campaign.updated_at'
            ));

        if(empty($campaigns)) {
            return Redirect::to_route('brand_admin')->with('errors', 'Brand Activity not founded !');
        }

        return View::make('admin/brand/activity')
                    ->with('campaigns',$campaigns)
                    ->with('brand_title', $brand_data->title);
    }
}