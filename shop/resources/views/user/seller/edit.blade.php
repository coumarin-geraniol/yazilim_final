@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tedarikçi Bilgilerini Güncelle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Tedarikçi Bilgilerini Güncelle</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2">
                    <form
                        action="{{ route('user.seller.update', ['user' => $seller->user->id, 'seller' => $seller->id]) }}"
                        method="POST" class="w-50 mt-3">
                        @csrf
                        @method('PATCH')
                        <div class="form-group mb-4">
                            <label>Tedarikçi Adı</label>
                            <input type="text" class="form-control" name="name" placeholder="Tedarikçi adı Giriniz"
                                   value="{{ $seller->name }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email Giriniz"
                                   value="{{ $seller->user->email }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Telefon Numarası</label>
                            <input type="text" class="form-control" name="phone" placeholder="Telefon numarası Giriniz"
                                   value="{{ $seller->phone }}">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Adres</label>
                            <input type="text" class="form-control" name="address" placeholder="Adres Giriniz"
                                   value="{{ $seller->address }}">
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Teslimat Bilgisi</label>
                            <input type="text" class="form-control" name="delivery_info" placeholder="Teslimat bilgisi Giriniz"
                                   value="{{ $seller->delivery_info }}">
                            @error('delivery_info')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Tedarikçi Bilgilerini Güncelle">
                            </div>
                        </div>


                    </form>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-wrapper -->
@endsection
