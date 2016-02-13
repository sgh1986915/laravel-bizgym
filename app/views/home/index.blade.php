@extends(Auth::check() ? 'layouts.dashboard' : 'layouts.guest')

@section('title', $title)
@section('content')
<h1>{{ $hello }}</h1>
@endsection