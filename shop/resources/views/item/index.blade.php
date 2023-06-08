@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ürünler</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Ürünler</li>
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
                                    <td>ID</td>
                                    <td>İsim</td>
                                    <td>Tedarikçi</td>
                                    <td>Açıklama</td>
                                    <td>Kategori</td>
                                    <td>Fiyat</td>
                                    <td>Adet</td>
                                    <td class="column-actions">Göster</td>
                                    <td class="column-actions">Güncellemek</td>
                                    <td class="column-actions">Silmek</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    @if($item->seller_id == 10)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->seller->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->category->title }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->quantity }} {{ $item->getTypeTitleAttribute() }}</td>
                                        <td class="column-actions"><a href="{{ route('item.show', $item->id) }}"><i
                                                    class="far fa-eye"></i></a></td>
                                        <td class="column-actions"><a class="text-success"
                                               href="{{ route('item.edit', $item->id) }}"><i
                                                    class="fas fa-pencil-alt"></i></a></td>
                                        <td class="column-actions">
                                            <form action="{{ route('item.delete', $item->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash-alt text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <a tabindex="1" href="{{ route('item.create') }}" class="btn btn-block btn-primary mt-3">Ürün Ekle</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
