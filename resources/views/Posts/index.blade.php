@extends('layouts.mainLayout')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">


         <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary text-uppercase" href="{{route('blog.create')}}">Create New Post →</a>
        </div>

        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach ( $blogs as $blog )
                     <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">{{$blog->title}}</h2>
                            <h3 class="post-subtitle">{{$blog->subTitle}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 24, 2023
                        </p>
                        <a href="{{route('blog.edit',$blog->id)}}"> Edit</a>
                        <form action="{{route('blog.destroy',$blog->id)}}" method="POST" class="d-inline ms-3">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>


                    </div>

                    <!-- Divider-->
                    <hr class="my-4" />
                @endforeach

            </div>
        </div>
    </div>
@endsection
