<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Collections
    |--------------------------------------------------------------------------
    |
    | Basset is built around collections. A collection contains assets for
    | your application. Collections can contain both stylesheets and
    | javascripts.
    |
    | A default "application" collection is ready for immediate use. It makes
    | a couple of assumptions about your directory structure.
    |
    | /public
    |    /assets
    |        /stylesheets
    |            /less
    |            /sass
    |        /javascripts
    |            /coffeescripts
    |
    | You can overwrite this collection or remove it by publishing the config.
    |
    */
    
    'collections' => array(

        'application' => function($collection)
        {
            // Switch to the stylesheets directory and require the "less" and "sass" directories.
            // These directories both have a filter applied to them so that the built
            // collection will contain valid CSS.
            $directory = $collection->directory('assets/stylesheets', function($collection)
            {
                // Here we specify neccessary stylesheets
                // 
                // 1. To load all stylesheets files use :
                //    $collection->requireDirectory('some_folder');
                // 
                // 2. To load specific files use :
                //    $collection->stylesheet('some_folder/some-file.css');
                //
                $collection->stylesheet('bootstrap/bootstrap.css'); 
                $collection->stylesheet('bootstrap/bootstrap-responsive.css');
                $collection->requireDirectory('jquery_ui');
                $collection->stylesheet('plugins/select2/select2.css')->raw();
                $collection->requireDirectory('plugins/bootstrap_switch');
                $collection->stylesheet('plugins/common/bootstrap-wysihtml5.css')->raw();
                $collection->requireDirectory('plugins/xeditable');
                $collection->requireDirectory('plugins/jquery_fileupload');
                $collection->requireDirectory('plugins/fullcalendar');
                $collection->requireDirectory('plugins/mention');
                $collection->requireDirectory('plugins/tabdrop');
                $collection->requireDirectory('plugins/jgrowl');
                $collection->requireDirectory('plugins/datatables');
                $collection->requireDirectory('plugins/dynatree');
                $collection->requireDirectory('plugins/bootstrap_colorpicker');
                $collection->requireDirectory('plugins/bootstrap_datetimepicker');
                $collection->requireDirectory('plugins/bootstrap_daterangepicker');
                $collection->requireDirectory('plugins/flags');
                $collection->requireDirectory('plugins/slider_nav');
                $collection->requireDirectory('plugins/fuelux');
                $collection->requireDirectory('plugins/toastr');
                $collection->stylesheet('themes/dark-theme.css');
                $collection->stylesheet('plugins/select2/select2.css')->raw();

                // If the stylesheets file are within the base folder
                // we will automatically include them
                $collection->requireDirectory();
            });

            // $directory->apply('CssMin');

            // Switch to the javascripts directory
            $directory = $collection->directory('assets/javascripts', function($collection)
            {
                // Here we specify neccessary scripts
                // 
                // 1. To load all scripts files use :
                //    $collection->requireDirectory('some_folder');
                // 
                // 2. To load specific files use :
                //    $collection->javascript('some_folder/some-file.js');
                //
                $collection->javascript('jquery/jquery.min.js')->raw(); 
                $collection->javascript('plugins/common/wysihtml5.min.js')->raw();
                $collection->javascript('plugins/xeditable/wysihtml5.js')->raw();
                $collection->javascript('bootstrap/bootstrap.min.js')->raw();
                $collection->requireDirectory('plugins/mobile_events')->raw();
                $collection->javascript('jquery/jquery-migrate.min.js')->raw();
                $collection->requireDirectory('jquery_ui');
                $collection->javascript('plugins/toastr/toastr.js');
                $collection->javascript('plugins/flot/excanvas.js');
                $collection->javascript('plugins/flot/flot.min.js');
                $collection->javascript('plugins/flot/flot.resize.js');
                $collection->javascript('plugins/flot/flot.pie.js');
                $collection->requireDirectory('plugins/sparklines');
                $collection->requireDirectory('plugins/fullcalendar');
                $collection->javascript('plugins/datatables/jquery.dataTables.min.js');
                $collection->javascript('plugins/datatables/jquery.dataTables.columnFilter.js');
                $collection->javascript('plugins/xeditable/bootstrap-editable.min.js')->raw();
                $collection->javascript('plugins/common/bootstrap-wysihtml5.js')->raw();
                $collection->javascript('plugins/select2/select2.js')->raw();
                $collection->requireDirectory('plugins/mention');
                $collection->requireDirectory('plugins/input_mask');
                $collection->requireDirectory('plugins/fileinput');
                $collection->requireDirectory('plugins/modernizr');
                $collection->requireDirectory('plugins/retina');
                $collection->javascript('plugins/fileupload/tmpl.min.js')->raw();
                $collection->javascript('plugins/fileupload/load-image.min.js')->raw();
                $collection->javascript('plugins/fileupload/canvas-to-blob.min.js')->raw();
                $collection->javascript('plugins/fileupload/jquery.iframe-transport.min.js')->raw();
                $collection->javascript('plugins/fileupload/jquery.fileupload.min.js')->raw();
                $collection->javascript('plugins/fileupload/jquery.fileupload-fp.min.js')->raw();
                $collection->javascript('plugins/fileupload/jquery.fileupload-ui.min.js')->raw();
                $collection->javascript('plugins/fileupload/jquery.fileupload-init.js')->raw();
                $collection->requireDirectory('plugins/timeago');
                $collection->requireDirectory('plugins/slimscroll');
                $collection->requireDirectory('plugins/autosize');
                $collection->requireDirectory('plugins/charCount');
                $collection->javascript('plugins/validate/jquery.validate.min.js');
                $collection->javascript('plugins/validate/additional-methods.js');
                $collection->requireDirectory('plugins/naked_password');
                $collection->requireDirectory('plugins/nestable');
                $collection->requireDirectory('plugins/tabdrop');
                $collection->requireDirectory('plugins/jgrowl');
                $collection->requireDirectory('plugins/bootbox');
                $collection->requireDirectory('plugins/dynatree');
                $collection->requireDirectory('plugins/slider_nav');
                $collection->requireDirectory('plugins/fuelux');
                $collection->javascript('plugins/flexisel/jquery.flexisel.js')->raw();
                $collection->requireDirectory('plugins/fitvids')->raw();
                $collection->javascript('nav.js');
                $collection->javascript('tables.js');
                $collection->javascript('theme.js');
                $collection->javascript('custom.js')->raw();
                $collection->javascript('tasks.js')->raw();
                $collection->requireDirectory('plugins/bootstrap_switch')->raw();
                $collection->requireDirectory('plugins/bootstrap_colorpicker')->raw();
                $collection->requireDirectory('plugins/bootstrap_datetimepicker')->raw();
                $collection->requireDirectory('plugins/bootstrap_daterangepicker');
                $collection->requireDirectory('plugins/bootstrap_maxlength');
                $collection->requireDirectory('plugins/bootstrap_hover_dropdown');
                $collection->requireDirectory('demo');
                $collection->javascript('plugins/jquery_form/jquery.form.min.js')->raw();
            });

            //$directory->apply('JsMin');
        }

    ),

    /*
    |--------------------------------------------------------------------------
    | Production Environment
    |--------------------------------------------------------------------------
    |
    | Basset needs to know what your production environment is so that it can
    | respond with the correct assets. When in production Basset will attempt
    | to return any built collections. If a collection has not been built
    | Basset will dynamically route to each asset in the collection and apply
    | the filters.
    |
    | The last method can be very taxing so it's highly recommended that
    | collections are built when deploying to a production environment.
    |
    | You can supply an array of production environment names if you need to.
    |
    */

    'production' => array('production', 'prod', 'staging', 'local', 'testing'),

    /*
    |--------------------------------------------------------------------------
    | Build Path
    |--------------------------------------------------------------------------
    |
    | When assets are built with Artisan they will be stored within a directory
    | relative to the public directory.
    |
    | If the directory does not exist Basset will attempt to create it.
    |
    */

    'build_path' => 'builds',

    /*
    |--------------------------------------------------------------------------
    | Debug
    |--------------------------------------------------------------------------
    |
    | Enable debugging to have potential errors or problems encountered
    | during operation logged to a rotating file setup.
    |
    */

    'debug' => false,

    /*
    |--------------------------------------------------------------------------
    | Node Paths
    |--------------------------------------------------------------------------
    |
    | Many filters use Node to build assets. We recommend you install your
    | Node modules locally at the root of your application, however you can
    | specify additional paths to your modules.
    |
    */

    'node_paths' => array(

        base_path().'/node_modules'

    ),

    /*
    |--------------------------------------------------------------------------
    | Gzip Built Collections
    |--------------------------------------------------------------------------
    |
    | To get the most speed and compression out of Basset you can enable Gzip
    | for every collection that is built via the command line. This is applied
    | to both collection builds and development builds.
    |
    | You can use the --gzip switch for on-the-fly Gzipping of collections.
    |
    */

    'gzip' => false,

    /*
    |--------------------------------------------------------------------------
    | Asset and Filter Aliases
    |--------------------------------------------------------------------------
    |
    | You can define aliases for commonly used assets or filters.
    | An example of an asset alias:
    |
    |   'layout' => 'stylesheets/layout/master.css'
    |
    | Filter aliases are slightly different. You can define a simple alias
    | similar to an asset alias.
    |
    |   'YuiCss' => 'Yui\CssCompressorFilter'
    |
    | However if you want to pass in options to an aliased filter then define
    | the alias as a nested array. The key should be the filter and the value
    | should be a callback closure where you can set parameters for a filters
    | constructor, etc.
    |
    |   'YuiCss' => array('Yui\CssCompressorFilter', function($filter)
    |   {
    |       $filter->setArguments('path/to/jar');
    |   })
    |
    |
    */

    'aliases' => array(

        'assets' => array(),

        'filters' => array(

            /*
            |--------------------------------------------------------------------------
            | Less Filter Alias
            |--------------------------------------------------------------------------
            |
            | Filter is applied only when asset has a ".less" extension and it will
            | attempt to find missing constructor arguments.
            |
            */

            'Less' => array('LessphpFilter', function($filter)
            {
                $filter->whenAssetIs('.*\.less')->findMissingConstructorArgs();
            }),

            /*
            |--------------------------------------------------------------------------
            | CssMin Filter Alias
            |--------------------------------------------------------------------------
            |
            | Filter is applied only when within the production environment and when
            | the "CssMin" class exists.
            |
            */

            'CssMin' => array('MinFilter', function($filter)
            {
                $filter->whenAssetIsStylesheet()->whenProductionBuild()->whenClassExists('\Minifier\MinFilter')->setArguments('css');
            }),

            /*
            |--------------------------------------------------------------------------
            | JsMin Filter Alias
            |--------------------------------------------------------------------------
            |
            | Filter is applied only when within the production environment and when
            | the "JsMin" class exists.
            |
            */

            'JsMin' => array('MinFilter', function($filter)
            {
                $filter->whenAssetIsJavascript()->whenProductionBuild()->whenClassExists('\Minifier\MinFilter')->setArguments('js');
            })

        )

    )

);
