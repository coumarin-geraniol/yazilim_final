@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ürünü Güncelle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Ürünü Güncelle</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-2">
                    <form action="{{ route('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="title">Ürün İsmi</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="Ürün ismi Giriniz" value="{{ $item->title }}">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Ürün Açıklaması</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                           placeholder="Ürün açıklaması Giriniz" value="{{ $item->description }}"
                                    >
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="content">Ürün Detayları</label>
                                    <textarea name="content" class="form-control" id="content" cols="30" rows="12"
                                              placeholder="Ürün detaylarını Giriniz">{{ $item->content }}</textarea>
                                    @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label>Tedarikçi</label>
                                    <select class="form-control" name="seller_id">
                                        <option disabled selected>Tedarikçi Seçiniz</option>
                                        @foreach($sellers as $seller)
                                            <option value="{{ $seller->id }}"
                                                {{ $seller->id == $item->seller_id ? 'selected' : '' }}>
                                                {{ $seller->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('seller_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="price">Ürün Fiyatı</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                           placeholder="Ürün fiyatı Giriniz" value="{{ $item->price }}">
                                    @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Ürün Sayısı</label>
                                    <input type="text" class="form-control" name="quantity" id="quantity"
                                           placeholder="Ürün sayısı Giriniz" value="{{ $item->quantity }}">
                                    @error('quantity')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label>Birim Tipi</label>
                                    <select name="type" class="form-control">
                                        <option disabled selected>Birim tipi Seçiniz</option>
                                        @foreach($types as $id => $type)
                                            <option value="{{ $id }}" {{ $id == $item->type ? 'selected' : '' }}>
                                                {{ $type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="category_id">
                                        <option disabled selected>Kategori Seçiniz</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $item->category_id ? 'selected' : '' }}>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group select2-primary">
                                    <label for="tag">HashTagler</label>
                                    <select class="select2" name="tag_ids[]" multiple="multiple" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}"
                                                {{ is_array( $item->tags->pluck('id')->toArray() ) && in_array($tag->id, $item->tags->pluck('id')->toArray() ) ? 'selected' : '' }}>
                                                {{ $tag->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('tag_ids')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Resimler</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="images[]">
                                                <label class="custom-file-label">Resim Seçiniz</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Yükle</span>
                                            </div>
                                        </div>
                                        @error('images')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="images[]">
                                                <label class="custom-file-label">Resim Seçiniz</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Yükle</span>
                                            </div>
                                        </div>
                                        @error('images')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="images[]">
                                                <label class="custom-file-label">Resim Seçiniz</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Yükle</span>
                                            </div>
                                        </div>
                                        @error('images')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-2">
                                            <img class="preview_image" id="preview_image" src="#" alt="preview_image"
                                                 class="img-fluid" style="display: none;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 mt-2">
                                <label>Mevcut Resim</label>
                                <div class="row col-12">
                                    @foreach ($item->images as $image)
                                        <div class="col-4 mt-2">
                                            <div>
                                                <img id="preview_image" src="{{ asset('storage/' . $image->path) }}"
                                                     class="preview_image_edit" alt="preview_image"/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <input type="submit" class="btn btn-block btn-primary mt-3" value="Ürün Ekle">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-wrapper -->
@endsection
