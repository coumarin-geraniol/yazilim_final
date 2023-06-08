@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $buyer->name }} {{ $buyer->surname }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ $buyer->name }} {{ $buyer->surname }}</li>
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
                <div class="col-8 mt-2">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $buyer->id }}</td>
                                </tr>
                                <tr>
                                    <th>Kullanici Adı</th>
                                    <td>{{ $buyer->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $buyer->user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Telefon Numarası</th>
                                    <td>{{ $buyer->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Adres</th>
                                    <td style="width: 200px; word-wrap: break-word; white-space: normal;">{{ $buyer->address }}</td>
                                </tr>
                                <tr>
                                    <th>Cinsiyet</th>
                                    <td>{{ $buyer->getGenderTitleAttribute() }}</td>
                                </tr>
                                <tr>
                                    <th>Güncellemek</th>
                                    <td>
                                        <a class="text-success"
                                           href="{{ route('user.buyer.edit', ['user' => $buyer->user->id, 'buyer' => $buyer->id]) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Silmek</th>
                                    <td>
                                        <form
                                            action="{{ route('user.buyer.delete', ['user' => $buyer->user->id, 'buyer' => $buyer->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash-alt text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <a href="{{ route('user.index') }}" class="btn btn-block btn-primary mt-3">Geri</a>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
