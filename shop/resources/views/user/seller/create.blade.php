@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tedarikçi Ekle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Tedarikçi Ekle</li>
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
                    <form action="{{ route('user.seller.store', ['user' => $user->id]) }}" method="POST" class="w-50 mt-3">
                        @csrf
                        <div class="form-group mb-4">
                            <label>Tedarikçi Adı</label>
                            <input type="text" class="form-control" name="name" placeholder="Tedarikçi adı Giriniz"
                                   value="{{ old('name') }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label>Telefon Numarısı</label>
                            <input type="text" class="form-control" name="phone" placeholder="Telefon numarısı Giriniz"
                                   value="{{ old('phone') }}">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label>Adres</label>
                            <input type="text" class="form-control" name="address" placeholder="Adres Giriniz"
                                   value="{{ old('address') }}">
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label>Teslimat Bilgisi</label>
                            <textarea name="delivery_info" class="form-control" cols="30" rows="10" placeholder="Teslimat bilgisi Giriniz">{{ old('delivery_info') }}</textarea>
                            @error('delivery_info')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Kullanıcı Ekle">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
