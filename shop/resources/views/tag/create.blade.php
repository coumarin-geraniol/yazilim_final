@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hashtag Ekle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Hashtag Ekle</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2">
                    <form action="{{ route('tag.store') }}" method="POST" class="w-25 mt-3">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Hashtag Giriniz"
                                   value="{{ old('title') }}">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Hashtag Ekle">

                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
