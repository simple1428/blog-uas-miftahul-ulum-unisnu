@extends('home.app')


@section('content')
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Aqila Jati!</h1> 
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row border">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                @if($post[0]->image)
                <a href="#!"><img class="card-img-top" src="{{ asset('storage/'.$post[0]->image) }}" alt="..." /></a>
                @else
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                @endif
                <div class="card-body">
                    <div class="small text-muted">{{ $post[0]->created_at }}</div>
                    <h2 class="card-title">{{ $post[0]->title }}</h2>
                    <p class="card-text">{!! Str::limit($post[0]->body,100 )!!}</p>
                    <a class="btn btn-primary" href="{{ url('/blog/detail/'.$post[0]->slug) }}">Read more →</a>
                </div>
            </div> 
            <div class="row">
                @foreach ($post as $p)
                <!-- Blog post-->
                <div class="col-lg-6">
                    <div class="card mb-4">
                        @if($p->image)
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/'.$p->image) }}" alt="..." /></a>
                        @else
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        @endif
                        <div class="card-body">
                            <div class="small text-muted">{{ $p->created_at }}</div>
                            <h2 class="card-title h4">{{ $p->title }}</h2>
                            <p class="card-text">{!! Str::limit($p->body,100 )!!}</p>
                            <a class="btn btn-primary" href="{{ url('/blog/detail/'.$p->slug) }}">Read more →</a>
                        </div>
                    </div>  
                </div>
            </div>
                @endforeach 
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav> 
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4"> 
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
</div> 
@endsection