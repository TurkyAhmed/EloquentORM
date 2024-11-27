@extends('layouts.mainLayout')
@section('content')
    <div style="padding: 10%">
        <form action="{{route('blog.store')}}" method="POST">
            @csrf
            @method("POST")

        <div class="form-floating">
            <input class="form-control" name="title" type="text" />
            <label for="title">Title</label>
        </div>

        <div class="form-floating">
            <input class="form-control" name="subTitle"  type="text" />
            <label for="subTitle">SubTitle</label>
        </div>
        
        <br />
        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Create</button> |
        <a href="{{route('blog.index')}}">Go Back</a>
        </form>
    </div>

@endsection
