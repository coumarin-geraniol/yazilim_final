@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $item->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ $item->title }}</li>
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
                                    <td>{{ $item->id }}</td>
                                </tr>
                                <tr>
                                    <th>İsim</th>
                                    <td>{{ $item->title }}</td>
                                </tr>
                                <tr>
                                    <th>Tedarikçi</th>
                                    <td>{{ $item->seller->name }}</td>
                                </tr>
                                <tr>
                                    <th>Açıklama</th>
                                    <td>{{ $item->description }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>{{ $item->category->title }}</td>
                                </tr>
                                <tr>
                                    <th>HashTagler</th>
                                    <td>
                                        @foreach($item->tags as $tag)
                                            {{ $tag->title }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Fiyat</th>
                                    <td>{{ $item->price }}</td>
                                </tr>
                                <tr>
                                    <th>Adet</th>
                                    <td>{{ $item->quantity }} {{ $item->getTypeTitleAttribute() }}</td>
                                </tr>
                                <tr>
                                    <th>Güncelle</th>
                                    <td><a class="text-success" href="{{ route('item.edit', $item->id) }}"><i
                                                class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Sil</th>
                                    <td>
                                        <form action="{{ route('item.delete', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent"><i
                                                    class="fas fa-trash-alt text-danger" role="button"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-2">
                    <label>Resim</label>
                    <div class="row col-12">
                        @foreach ($item->images as $image)
                            <div class="col-6 mt-2">
                                <div>
                                    <img id="preview_image" src="{{ asset('storage/' . $image->path) }}"
                                         class="preview_image_show" alt="preview_image"/>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <a href="{{ route('item.index') }}" class="btn btn-block btn-primary mt-3">Geri</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- /.content-wrapper -->
@endsection
