@extends('layout')
@section('title', 'View')
@section('content')
    <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
    <table class="table table-striped">
        <thead>
        <th>Title</th>
        <th>Text</th>
        <th>Actions</th>
        </thead>
        <tbody>
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <form method="POST" action="{{route('posts.destroy', ['post'=> $post->id])}}">
                    @method('DELETE')
                    @csrf
                    <a class="btn btn-warning" href="{{route('posts.edit', ['post'=>$post->id])}}">edit</a>
                    <input class="btn btn-danger" type="submit" value="delete">
                </form>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
