@extends('layout/admin')
@section('head-specific')
<title>Article {{$article->id}}</title>
@endsection
@section('content')
    <h1>{!!$article->title!!}</h1>
    <br>

    <div>
        <p>{!!$article->date!!}</p>
        <p>{!!$category->name!!}</p>
    </div>
    <br>
    <br>
    <img src="{{ url('public/Image/'.$image->image) }}">
    {!!$article->text!!}
@auth
    <a href="/admin/article/{{$article->id}}"><button>to edit</button></a>

    <form action="{{ action('ArticleController@delete', [$article->id])}}" method="post">
        @method('delete')
            @csrf
        <button>Delete</button>
      </form>
@endauth
@endsection