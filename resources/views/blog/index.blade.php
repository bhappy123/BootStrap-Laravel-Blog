@extends('layouts.layout')
@section('allblogs')
<div class="container-fluid">
    <div class="row p-1">
        <div class="col-md-2 px-2 py-3 bg-success text-white" style="height: 80vh; position: fixed; left: 0; top: 80px; z-index: 100;">
            <h4 class="bg-light text-success p-2">Select Category</h4>
        <form action="{{url('blogs/category')}}" method="POST">
            @csrf
                <div class="form-check">
                    <input type="checkbox" name="category" onchange="submit();" class="form-check-input" id="exampleCheck1" value="HTML">
                    <label class="form-check-label" for="exampleCheck1">HTML</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="category" onchange="submit();"  class="form-check-input" id="exampleCheck2" value="CSS">
                    <label class="form-check-label" for="exampleCheck2">CSS</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="category" onchange="submit();"  class="form-check-input" id="exampleCheck3" value="JavaScript">
                    <label class="form-check-label" for="exampleCheck3">JavaScript</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="category" onchange="submit();" class="form-check-input" id="exampleCheck4" value="PHP">
                    <label class="form-check-label" for="exampleCheck4">PHP</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="category" onchange="submit();" class="form-check-input" id="exampleCheck5" value="JAVA">
                    <label class="form-check-label" for="exampleCheck5">JAVA</label>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-10 mt-3">
            @foreach ($blog as $singleBlog)
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">{{$singleBlog['title']}}</h1>
                        <p class="lead">{{$singleBlog['description']}}</p>
                        <hr class="my-2">
                        <p>{{$singleBlog['author']}}</p>
                        <p class="lead">
                            <a href="/blogs/{{$singleBlog['id']}}" class="btn btn-outline-success">Read Article</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection