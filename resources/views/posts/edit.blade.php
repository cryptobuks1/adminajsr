@extends('layouts.app')
@section('content')

    <h1>Edit</h1>

    {{--Kopierat från https://gist.github.com/trevorgreenleaf/b1508d5524d43a666757f9e9fd1e3903--}}
    @if (count($errors) > 0)
        <div class="alert alert-danger text-left">
            <strong>Whoops!</strong> There were problems with input:
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row">
        <div class="col-12 col-md-4">
            <form class="form" action="{{ url('posts/'.$post->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" value="{{ $post->title }}" class="form-control" type="text" name="title">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" value="{{ $post->content }}" class="form-control" type="text" name="content">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>

    <form action="{{ url('posts/'.$post->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <button class="btn btn-danger" type="submit">Delete</button>
    </form>

@endsection