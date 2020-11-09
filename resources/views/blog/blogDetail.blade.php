@extends('layouts.layout')
@section('blogDetail')
<p class="text-center">{{$userEmail['email']}}</p>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">{{$singleBlog['title']}}</h1>
            <p class="lead">{{$singleBlog['description']}}</p>
            <hr class="my-2">
            <p>{{$singleBlog['author']}}</p>
        </div>
    </div>

    <div class="container">
            @foreach ($comments as $comment)
            <div>
            <p style="display: inline-block" class="p-2 bg-success mt-1 text-white">{{$comment['comment']}}</p>
            </div>
            @endforeach
    </div>
    @auth
        
    <div class="container jumbotron mt-5">
    <form action="{{url('comment/add')}}" method="POST" class="row">
            @csrf
            <div class="col-md-9">
                <div class="form-group">
                  <label for="add-comment">Add Comment</label>
                  <input type="text" class="form-control" name="newcomment" id="add-comment" placeholder="Type Here ....">
                  <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                  <input type="hidden" name="blogId" value="{{$id}}">
                </div>
            </div>
            <div class="col-md-3 pt-2">
                <button type="submit" class="btn btn-outline-success btn-lg btn-block mt-3 pt-1">Add</button>
            </div>
        </form>
    </div>
    @endauth

@endsection