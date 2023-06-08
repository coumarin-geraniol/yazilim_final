@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Renkler</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Renkler</li>
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
                <div class="col-6 mt-2">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Hash</td>
                                    <td>Renk</td>
                                    <td>Göster</td>
                                    <td>Güncellemek</td>
                                    <td>Silmek</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($colors as $color)
                                    <tr>
                                        <td>{{ $color->id }}</td>
                                        <td>#{{ $color->title }}</td>
                                        <td>
                                            <div style="width: 16px; height: 16px; background: {{'#' . $color->title}}"></div>
                                        </td>
                                        <td><a href="{{ route('color.show', $color->id) }}"><i
                                                    class="far fa-eye"></i></a></td>
                                        <td><a class="text-success"
                                               href="{{ route('color.edit', $color->id) }}"><i
                                                    class="fas fa-pencil-alt"></i></a></td>
                                        <td>
                                            <form action="{{ route('color.delete', $color->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash-alt text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('color.create') }}" class="btn btn-block btn-primary mt-3">Renk Ekle</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
