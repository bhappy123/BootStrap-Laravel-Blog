@extends('layouts.layout')

@section('createBlog')
<div class="mt-5"></div>
<div class="container">
    <div class="row ">
        <div class="col-md-5 mx-auto bg-light p-3   ">
            <h2 class="text-center">Create New Blog</h2>
            <form action="store" method="POST" bg-lights class="form-group">
                @csrf
                <div class="form-group">
                    <label>Blog Title</label>
                    <input type="text" name="title" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="JAVA">JAVA</option>
                    </select>
                </div>
                <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label>author</label>
                <input type="text" name="author" id="" class="form-control">
                </div>
                <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                <button type="submit" class="btn btn-block btn-success text-white mt-3">Confirm</button>
            </form>
    </div>
</div>
</div>
    
@endsection