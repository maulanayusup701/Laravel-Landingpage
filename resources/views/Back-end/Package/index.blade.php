@extends('Back-end.layouts.main')
@section('content')
    <script src="{{ asset('Back-end/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        {{-- sidebar --}}
        @include('Back-end.layouts.components.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>{{ $title }}</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $title }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Desciption</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($packages as $package)
                                                <tr>
                                                    <td class="col">
                                                        <label class="form-label">{{ $loop->iteration }}</label>
                                                    </td>
                                                    <td class="col">
                                                        <label class="form-label">{{ $package->name }}</label>
                                                    </td>
                                                    <td class="col">
                                                        <label class="form-label">{{ $package->description }}</label>
                                                    </td>
                                                    <td class="col">
                                                        <label class="form-label">{{ "IDR " . $package->price .  " K" }}</label>
                                                    </td>
                                                    <td class="col">
                                                        <img src="{{ asset('storage/' . $package->image) }}" alt="">
                                                    </td>
                                        
                                                    <td class="col-1">
                                                        <div class="row gap-2">
                                                            <div class="col">
                                                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#edit{{ $package->id }}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col">
                                                                <form action="QNA/{{ $package->id }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">
                                                                        <i class="bi bi-x-octagon-fill text-white"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @include('Back-end.layouts.components.footer')
        </div>
    </div>

    @foreach ($packages as $package)
        <div class="modal fade text-left modal-borderless" id="edit{{ $package->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit QNA</h5>
                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="card-body">
                                <form class="form form-horizontal" action="QNA/{{ $package->id }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group mb-8">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    value="{{ $package->name }}" name="name" autofocus required>
                                            </div>
                                            <div class="form-group mb-8">
                                                <label for="answer" class="form-label">Description</label>
                                                <textarea class="form-control" id="answer" rows="3" style="height: 80px;" name="answer"
                                                value="{{ $package->description }}">{{ $package->description }}</textarea>
                                            </div>
                                            <div class="form-group mb-8">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="text" class="form-control" id="price"
                                                    value="{{ $package->price }}" name="price" autofocus required>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-success me-1 mb-1">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
