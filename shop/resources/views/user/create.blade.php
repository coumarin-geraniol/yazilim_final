@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kullanıcı Ekle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Kullanıcı Ekle</li>
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
                    <form action="{{ route('user.store') }}" method="POST" class="w-50 mt-3">
                        @csrf
                        <div class="form-group mb-4">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email Giriniz"
                                   value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Kullanıcı Tipi</label>
                            <select name="role" class="form-control">
                                <option disabled selected>Kullanıcı tipi Seçiniz</option>
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}" {{ $id == old('role') ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Şifre</label>
                            <input type="text" class="form-control" name="password" placeholder="Şifre Giriniz"
                                   value="{{ old('password') }}">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>Şifre Doğrulama</label>
                            <input type="text" class="form-control" name="password_confirmation"
                                   placeholder="Şifreyi Doğrulayınız"
                                   value="{{ old('passsword_confirmation') }}">
                            @error('passsword_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Kullanıcı Detaylarını Ekle">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
