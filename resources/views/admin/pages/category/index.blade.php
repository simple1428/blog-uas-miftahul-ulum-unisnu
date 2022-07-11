@extends('admin.app')
@section('content')

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
        <section id="main-content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <h4>Category </h4>
                        <div class="card-title">
                            @if(session()->has('success'))
                          <div class="alert alert-success" role="alert">
                           {{ session('success') }}
                          </div>
                          @endif
                            @if(session()->has('gagal'))
                            <div class="alert alert-danger" role="alert">
                            {{ session('gagal') }}
                            </div>
                            @endif
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah
                            </button> 
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th> 
                                            <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $p)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $p->name }}</td>
                                            <td><span>
                                                <button type="button" class="badge border-0 text-white bg-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $p->id }}">
                                                   edit
                                                  </button>
                                                  <!-- edit -->
                                                            <div class="modal fade" id="exampleModal{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Category</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form action="{{ url('/admin/category/'.$p->id) }}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="mb-3">  
                                                                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{ $p->name }}"> 
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </form>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>

                                                  <form action="{{ url('/admin/category/'.$p->id) }}" method="post" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class=" ms-2 badge border-0 text-white bg-danger">Delete</button>
                                            </form>
                                            </span></td> 
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>
</div>


<!-- tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{ url('/admin/category') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name"> 
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
    </div>
    </div>
</div>

 
@endsection