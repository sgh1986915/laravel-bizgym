@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')
<h1>{{ $some_key }}</h1>
@endsection