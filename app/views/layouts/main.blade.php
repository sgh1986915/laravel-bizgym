<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    @if (isset($title))
    <title>{{ $title }} - BizGym</title>
    @else
    <title>@yield('title') - BizGym</title>
    @endif
    <meta name="description" content="Slogan" />
    <!--/Meta -->

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    <!--/Mobile Specific -->

    <!-- The HTML5 shiv, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src='/assets/javascripts/ie/html5shiv.js' type='text/javascript'></script>
        <![endif]-->
    <!-- End Shiv -->

    <!-- CSS -->
    @stylesheets('application')
    <!--/CSS -->

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/ico/favicon.png">
    <!--/Favicon and Touch Icons --> 
  </head>
  <body class='contrast-red main-nav-closed'>
    @yield('header')
    <div id='wrapper'>
    <div id='main-nav-bg'></div>
    @yield('sidebar')

    <!--Content -->
    <section id='content'>
        <div class='container-fluid'>
          <!-- Alerts -->
          <div class="box-content alerts">
            @if (Session::get('errors'))
             @if(isset($errors->messages))
             @foreach ($errors->messages as $key => $value)
              @foreach ($value as $v_key => $message)
              {{ Toastr::stack('error',$message) }}
              <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Oh snap!</strong> {{ $message }}
              </div>
              @endforeach
             @endforeach
             @endif
            @endif
            
            @if (Session::has('message'))
              {{ Toastr::stack('success',Session::get('message'))}}
            @endif
            @if (Session::has('status'))
              {{ Toastr::success(Session::get('status'))}}
              <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Heads up!</strong> {{ Session::get('status') }}
              </div>
            @endif
            @if (Session::has('warning'))
              {{ Toastr::stack('warning',Session::get('warning'))}}
              <div class="alert alert-block ">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4 class="alert-heading">Warning!</h4>
                <p>{{ Session::get('warning') }}</p>
              </div>
            @endif
          </div>
          <!--/Alerts -->

          <!-- Content -->
          @yield('content')
        </div>
    </section>
    <!--/Content -->

  </div>
  <!-- start: JavaScript-->
  @javascripts('application')
  <script>
  {{ Toastr::dumpStack() }}
  @yield('inline_scripts')
  @widget_dump_scripts
  </script>
  <!-- end : JavaScript-->
</body>
</html>