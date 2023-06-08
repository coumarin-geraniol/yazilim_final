@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $seller->name }} {{ $seller->surname }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ $seller->name }} {{ $seller->surname }}</li>
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
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $seller->id }}</td>
                                </tr>
                                <tr>
                                    <th>Tedarikçi Adı</th>
                                    <td>{{ $seller->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $seller->user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Telefon Numarası</th>
                                    <td>{{ $seller->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Adres</th>
                                    <td style="width: 200px; word-wrap: break-word; white-space: normal;">{{ $seller->address }}</td>
                                </tr>
                                <tr>
                                    <th>Teslimat Bilgisi</th>
                                    <td>{{ $seller->delivery_info }}</td>
                                </tr>
                                <tr>
                                    <th>Güncellemek</th>
                                    <td>
                                        <a class="text-success"
                                           href="{{ route('user.seller.edit', ['user' => $seller->user->id, 'seller' => $seller->id]) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Silmek</th>
                                    <td>
                                        <form
                                            action="{{ route('user.seller.delete', ['user' => $seller->user->id, 'seller' => $seller->id]) }}"
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
