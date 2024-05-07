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
                                <button type="button" class="btn btn-success block mt-3" data-bs-toggle="modal" data-bs-target="#tambah">
                                    <i class="bi bi-pencil-square"></i>
                                    <span class="fw-bold">Tambah QNA</span>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($qnas as $qna)
                                                <tr>
                                                    <td class="col-1">
                                                        <label class="form-label">{{ $loop->iteration }}</label>
                                                    </td>
                                                    <td class="col-2">
                                                        <label class="form-label">{{ $qna->question }}</label>
                                                    </td>
                                                    <td class="col-8">
                                                        <label class="form-label">{{ $qna->answer }}</label>
                                                    </td>
                                        
                                                    <td class="col-1">
                                                        <div class="row gap-2">
                                                            <div class="col">
                                                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#edit{{ $qna->id }}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col">
                                                                <form action="QNA/{{ $qna->id }}" method="POST">
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

    @foreach ($qnas as $qna)
        <div class="modal fade text-left modal-borderless" id="edit{{ $qna->id }}" tabindex="-1" role="dialog"
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
                                <form class="form form-horizontal" action="QNA/{{ $qna->id }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group mb-8">
                                                <label for="question" class="form-label">Question</label>
                                                <input type="text" class="form-control" id="question"
                                                    value="{{ $qna->question }}" name="question" autofocus required>
                                            </div>
                                            <div class="form-group mb-8">
                                                <label for="answer" class="form-label">Answer</label>
                                                <textarea class="form-control" id="answer" rows="3" style="height: 180px;" name="answer"
                                                    value="{{ $qna->answer }}">{{ $qna->answer }}</textarea>
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

    <div class="modal fade text-left modal-borderless" id="tambah" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah QNA</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="card-body">
                            <form class="form form-horizontal" action="QNA" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="form-group mb-8">
                                            <label for="question" class="form-label">Question</label>
                                            <input type="text" class="form-control" id="question" name="question"
                                                autofocus required>
                                        </div>
                                        <div class="form-group mb-8">
                                            <label for="answer" class="form-label">Answer</label>
                                            <textarea class="form-control" id="answer" rows="3" style="height: 180px;" name="answer"></textarea>
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
@endsection
