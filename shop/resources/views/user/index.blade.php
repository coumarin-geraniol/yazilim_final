@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kullanıcılar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Kullanıcılar</li>
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
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <td class="column-id">ID</td>
                                    <td class="column-name">Tedarikçi Adı</td>
                                    <td class="column-email">Email</td>
                                    <td class="column-phone">Telefon Numarası</td>
                                    <td class="column-address">Adres</td>
                                    <td class="column-delivery">Teslimat</td>
                                    <td class="column-actions">Show</td>
                                    <td class="column-actions">Edit</td>
                                    <td class="column-actions">Delete</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sellers as $seller)
                                    <tr>
                                        <td class="column-id">{{ $seller->id }}</td>
                                        <td class="column-name">{{ $seller->name }}</td>
                                        <td class="column-email">{{ $seller->user->email }}</td>
                                        <td class="column-phone">{{ $seller->phone }}</td>
                                        <td class="column-address">{{ $seller->address }}</td>
                                        <td class="column-delivery">{{ $seller->delivery_info }}</td>
                                        <td class="column-actions"><a href="{{ route('user.seller.show', ['user' => $seller->user->id, 'seller' => $seller->id]) }}">
                                                <i class="far fa-eye"></i></a>
                                        </td>

                                        <td class="column-actions"><a class="text-success"
                                               href="{{ route('user.seller.edit', ['user' => $seller->user->id, 'seller' => $seller->id] ) }}"><i
                                                    class="fas fa-pencil-alt"></i></a></td>
                                        <td class="column-actions">
                                            <form action="{{ route('user.seller.delete', ['user' => $seller->user->id, 'seller' => $seller->id] ) }}" method="POST">
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
                <div class="col-12 mt-2">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <td class="column-id">ID</td>
                                    <td class="column-name">İsim Soyisim</td>
                                    <td class="column-email">Email</td>
                                    <td class="column-phone">Telefon Numarası</td>
                                    <td class="column-address">Adres</td>
                                    <td class="column-gender">Cinsiyet</td>
                                    <td class="column-actions">Show</td>
                                    <td class="column-actions">Edit</td>
                                    <td class="column-actions">Delete</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buyers as $buyer)
                                    <tr>
                                        <td class="column-id">{{ $buyer->id }}</td>
                                        <td class="column-name">{{ $buyer->name }} {{ $buyer->surname }}</td>
                                        <td class="column-email">{{ $buyer->user->email }}</td>
                                        <td class="column-phone">{{ $buyer->phone }}</td>
                                        <td class="column-address">{{ $buyer->address }}</td>
                                        <td class="column-gender">{{ $buyer->genderTitle }}</td>
                                        <td class="column-actions"><a href="{{ route('user.buyer.show', ['user' => $buyer->user->id, 'buyer' => $buyer->id]) }}">
                                                <i class="far fa-eye"></i></a>
                                        </td>

                                        <td class="column-actions"><a class="text-success"
                                               href="{{ route('user.buyer.edit', ['user' => $buyer->user->id, 'buyer' => $buyer->id] ) }}"><i
                                                    class="fas fa-pencil-alt"></i></a></td>
                                        <td class="column-actions">
                                            <form action="{{ route('user.buyer.delete', ['user' => $buyer->user->id, 'buyer' => $buyer->id] ) }}" method="POST">
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
                <div class="col-4 mt-2">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <td class="column-id">ID</td>
                                    <td class="column-email">Email</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="column-email">{{ $user->id }}</td>
                                        <td class="column-name">{{ $user->email }}</td>
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
                    <a href="{{ route('user.create') }}" class="btn btn-block btn-primary mt-3">Kullanıcı Ekle</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
