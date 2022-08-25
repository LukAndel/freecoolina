@extends('blog/layout/layout')

@section('blog-head-specific')
    <title>about me</title>
@endsection

@section('blog-content')

    {!!$about->text!!}

    @auth
        <a href="/admin/about-me"><button>to edit</button></a>
    @endauth

@endsection