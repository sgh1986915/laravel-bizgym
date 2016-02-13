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
  
  @yield('content')

  <!-- start: JavaScript-->
  @javascripts('application')
  <script>
  {{ Toastr::dumpStack() }}
  @yield('inline_scripts')
  @widget_dump_scripts
  </script>
  <!-- end : JavaScript-->

</html>