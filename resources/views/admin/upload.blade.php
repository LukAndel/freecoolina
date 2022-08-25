@extends('layout/admin')
    
@section('head-specific')
    <title>Upload</title>
@endsection

@section('content')
@auth
    
    Upload

    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{action('UploadController@save')}}" >
            @csrf
                   
            <div class="image">
                <label><h4>Add image</h4></label>
                <input type="file" class="form-control" required name="image">
              </div>
          
              <div class="post_button">
                <button type="submit" class="btn btn-success">Add</button>
              </div>   
        </form>
 
    </div>



    <div class="image-view">
        @foreach($images as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>
	            <img src="{{ url('public/Image/'.$data->image) }}" style="height: 100px; width: 150px;">
                <form action="{{ action('UploadController@delete', [$data->id])}}" method="post">
                    @method('delete')
                        @csrf
                    <button>Delete</button>
                </form>
	        </td>
        </tr>
        @endforeach

    </div>
@endauth
@endsection