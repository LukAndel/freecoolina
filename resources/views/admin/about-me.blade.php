@extends('layout/admin')
    
@section('head-specific')
    <title>About me</title>
    <x-head.tinymce-config/>
@endsection

@section('content')
@auth
    About me

    
    <form action="{{ action('AboutMeController@store')}}" method="post">
        @csrf
        <textarea id="MCEtextarea" name="text">{{ isset($about) ? $about->text : ''}}</textarea>
            <button>Submit</button>
    </form>
@endauth
@endsection