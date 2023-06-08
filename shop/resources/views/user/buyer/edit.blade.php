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
                    <form
                        action="{{ route('user.buyer.update', ['user' => $buyer->user->id, 'buyer' => $buyer->id]) }}"
                        method="POST" class="w-50 mt-3">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>Kullanıcı Adı</label>
                                    <input type="text" class="form-control" name="name" tabindex="1"
                                           placeholder="Kullanıcı adı Giriniz"
                                           value="{{ $buyer->name }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Telefon Numarası</label>
                                    <input type="text" class="form-control" name="phone"  tabindex="3"
                                           placeholder="Telefon numarası Giriniz"
                                           value="{{ $buyer->phone }}">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Cinsiyet</label>
                                    <select name="gender" class="form-control" tabindex="5">
                                        <option disabled selected>Cinsiyet Seçiniz</option>
                                        @foreach($genders as $id => $gender)
                                            <option value="{{ $id }}"
                                                {{ $id == $buyer->gender ? 'selected' : '' }}>
                                                {{ $gender }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label>Kullanıcı Soyadı</label>
                                    <input type="text" class="form-control" name="surname" tabindex="2"
                                           placeholder="Kullanıcı soyadı Giriniz"
                                           value="{{ $buyer->surname }}">
                                    @error('surname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email Giriniz"
                                           value="{{ $buyer->user->email }}" tabindex="4">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label>Adres</label>
                                    <input type="text" class="form-control" name="address" placeholder="Adres Giriniz"
                                           value="{{ $buyer->address }}" tabindex="6">
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary"
                                       value="Kullanıcı Bilgilerini Güncelle">
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-wrapper -->
@endsection
