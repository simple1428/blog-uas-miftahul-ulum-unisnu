@extends('admin.app')
@section('content')

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
        <section id="main-content">
            <div class="row">
    
                
                  <section class="section dashboard">
                    <div class="row p-3">
              
                      <!-- Left side columns -->
                      <div class="col-lg-8">
                        <div class="row">
                <!-- Recent Sales -->
                <div class="container">
                    <div class="row justify-content-left mb-5">
                        <div class="col-md-12">
                            <h1 class="mb-3">{{ $post->title }}</h1>  
                            <a href="/admin/post" class="btn btn-success"><i class="bi bi-arrow-left"></i><span data-feather="arrow-left"> Back to all my posts</span></a>
        
                            <a href="{{ url('/admin/post/'. $post->slug .'/edit') }}" class="btn btn-warning">Edit</a>
        
                            <form action="/admin/post/{{ $post->slug }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="btn btn-danger border-0" onclick="return confirm('are you sure?')">Delete</button>
                            </form>
        
                            @if($post->image)
        
                            <div style="max-height: 500px;overflow:hidden;">
                              <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
                            </div>
                            @else
        
                            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
                            @endif
        
                            <article class="my-3 fs-5"> 
                            {!!  $post->body  !!}
                            </article> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>
</div>

 
 
@endsection