@extends('home.app')
@section('content')

<div class="container mt-5">
    <a href="{{ url('/blog') }}"class="btn btn-primary">kembali</a>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on   {{ $post->created_at }}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category->name }}</a> 
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4">  @if($post)
                            <a href="#!"><img class="card-img-top" src="{{ asset('storage/'.$post->image) }}" alt="..." /></a>
                            @else
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            @endif</figure>
                        <!-- Post content-->

                        {!! $post->body !!}
                        <section class="mb-5">
                        </section>
                    </article>
                    <!-- Comments section-->
                     
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                     
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    @foreach ($category as $ctg )
                                        
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="{{ url('/category/' . $ctg) }}">{{ $ctg->name }}</a></li> 
                                    </ul>
                                    @endforeach
                                </div> 
                            </div>
                        </div>
                    </div> 
                    
                </div>
            </div>
        </div>

@endsection