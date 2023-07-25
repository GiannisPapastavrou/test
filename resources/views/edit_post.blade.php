@extends('layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<h2>Edit Post</h2>  
<form action={{ URL::to('post/update/' . $post->id) }} method="POST">
    @csrf
    <div class="mb-3">
    <label for="author" class="col-md-2 col-form-label">Author</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="author" value="{{ $post->author }}" id="Author">
    </div>
  </div>
  <div class="mb-3">
    <label for="title" class="col-md-2 col-form-label">Title</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="title">
    </div>
  </div>
  <div class="mb-3">
    <label for="content"  class="col-md-2 col-form-label">Content:</label>
    <div class="col-md-10">
        <textarea type="text" class="form-control" name="content" id="content" rows="15">{{ $post->content }}</textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    

</form> 
 



@endsection