@extends('layout/admin')
    
@section('head-specific')
    <title>Article</title>
    <x-head.tinymce-config/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="/css/datepicker/cdnjs.css">
    <link rel="stylesheet" href="/css/datepicker/cdnjs2.css">
@endsection

@section('content')
@auth
    Article

    <div>
        @if($isNew)
        <form action="{{ action('ArticleController@store')}}" method="post">            
        @else
        <form action="/admin/article-show/{{$article->id}}" method="post">
          @method('put')  
        @endif
            @csrf
            <div id="options" class="options">
                <div class="container">
                  
                  <label>Date:</label>
                  <input class="date form-control" type="text" name="date" value={{ isset($article) ? $article->date : '' }}>
                </div>
                  <script type="text/javascript">
                    $('.date').datepicker({  
                      format: 'yyyy-mm-dd'
                    });  
                  </script>
            <label for="">Image:</label>
            <input type="text" name='image'value={{ isset($article) ? $article->image_id : ''}}>
            <label for="">Title:</label> 
            <textarea name="title">{{ isset($article) ? $article->title : ''}}</textarea>
            <label for="">Category:</label>
            <input type="text" name='category' value={{ isset($category) ? $category->name : ''}}>

            <textarea id="MCEtextarea" name="text">{{ isset($article) ? $article->text : ''}}</textarea>
            <button>Submit</button>
        </form>
        <br>
        <h3>Articles:</h3>
        @foreach($articles as $name)
        <tr>
          <td><a href="/admin/article/{{$name->id}}">{!!$name->title!!}</a></td>
        </tr>
        @endforeach
    </div>
@endauth
@endsection

