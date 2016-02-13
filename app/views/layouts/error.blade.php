@extends('layouts.simple')

@section('content')

<body class='contrast-red application-error 404-error contrast-background'>
	<div id='wrapper'>

      

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
          @yield('error_content')
        </div><!--/.application-content-->
      </div><!--/.application-->

    </div><!--/#wrapper-->

    <!-- start: JavaScript-->
    @javascripts('application')
    <script>
    {{ Toastr::dumpStack() }}
    @yield('inline_scripts')
    @widget_dump_scripts
    </script>
    <!-- end : JavaScript-->
  </body>
@stop

@section('inline_scripts')
@if (isset($errors) && !empty($errors))
console.log("WARNING:{{ $errors }}")</p>
@endif
@if (Session::has('auth_errors'))
{{ Toastr::error(Session::get('auth_errors'))}}
@endif
@stop