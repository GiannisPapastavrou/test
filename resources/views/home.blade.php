@extends('layout')

@section('content')

<a class="btn btn-primary" href="/post/create" role="button">Create Post</a>

<table>
    <tr>
      <th>Title</th>
      <th>Content</th>
      <th>Author</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->author}}</td>
        <td><a class="btn btn-primary" href="{{ URL::to('post/view/' . $post->id) }}">View Post</a></td>
        <td><a class="btn btn-primary" href="{{ URL::to('post/edit/' . $post->id) }}">Edit Post</a></td>
        <td><a class="btn btn-primary" href="{{ URL::to('post/delete/' . $post->id) }}">Delete Post</a></td>
    </tr>
    @endforeach
    

    
</table>


@endsection