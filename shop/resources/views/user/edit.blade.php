@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kullanıcıyı Güncelle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Kullanıcıyı Güncelle</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" class="w-50 mt-3">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>İsim</label>
                                    <input type="text" class="form-control" name="name" placeholder="İsim Giriniz"
                                           value="{{ $user->name }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email Giriniz"
                                           value="{{ $user->email }}">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Yaş</label>
                                    <input type="text" class="form-control" name="age" placeholder="Yaş Giriniz"
                                           value="{{ $user->age }}">
                                    @error('age')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>Soyad</label>
                                    <input type="text" class="form-control" name="surname" placeholder="Soyisim Giriniz"
                                           value="{{ $user->surname }}">
                                    @error('surname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Cinsiyet</label>
                                    <select name="gender" class="form-control">
                                        <option disabled selected>Cinsiyet Seçiniz</option>
                                        <option {{ $user->gender == 1 ? ' selected' : '' }} value="1">Erkek</option>
                                        <option {{ $user->gender == 2 ? ' selected' : '' }} value="2">Kadın</option>
                                    </select>
                                    @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Adres</label>
                                    <input type="text" class="form-control" name="address" placeholder="Adres Giriniz"
                                           value="{{ $user->address }}">
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Kullanıcıyı Güncelle">
                            </div>
                        </div>


                    </form>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-wrapper -->
@endsection
