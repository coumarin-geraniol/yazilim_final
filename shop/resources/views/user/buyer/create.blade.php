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
                    <form action="{{ route('user.buyer.store', ['user' => $user->id]) }}" method="POST"
                          class="w-50 mt-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Isim Giriniz"
                                           tabindex="1" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Telefon numarası</label>
                                    <input type="text" class="form-control" name="phone"
                                           placeholder="Telefon numarası Giriniz"
                                           tabindex="3" value="{{ old('phone') }}">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>Soyad</label>
                                    <input type="text" class="form-control" name="surname" placeholder="Soyad Giriniz"
                                           tabindex="2" value="{{ old('surname') }}">
                                    @error('surname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label>Cinsiyet</label>
                                    <select name="gender" class="form-control">
                                        <option disabled selected>Cinsiyet Seçiniz</option>
                                        @foreach($genders as $id => $gender)
                                            <option value="{{ $id }}" {{ $id == old('gender') ? 'selected' : '' }}>
                                                {{ $gender }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Adres</label>
                                    <input type="text" class="form-control" name="address" placeholder="Adres Giriniz"
                                           tabindex="2" value="{{ old('address') }}">
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input tabindex="6" type="submit" class="btn btn-primary" value="Kullanıcı Ekle">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
