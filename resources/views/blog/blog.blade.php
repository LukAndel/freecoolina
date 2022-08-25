@extends('blog/layout/layout')

@section('blog-head-specific')
    <title>Freecoolina</title>
@endsection

@section('blog-content')

@foreach($articles as $article)
<tr>
    <br>
  <td><a href="/article-show/{{$article->id}}">{!!$article->title!!}</a></td>
    @foreach($images as $image)
        @if($article->image_id == $image->id)
        <br>
        <img src="{{ url('public/Image/'.$image->image) }} "alt="">
        @endif
    @endforeach
</tr>
@endforeach

{{ $articles->links()}}

@endsection