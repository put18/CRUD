@extends('layout/apps')

@section('content')
    
<div class="container m-5">
    <form action="{{url('produk/'.$product->id)}}" method="POST">
        @method('PUT')
        @csrf

            <label for="aplikasi" class="form-label mt-3">nama_barang</label>
            <input value='{{$product->nama_barang}}'type="text" name="barang" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('barang')
                    <div class="invalid-feedback">
                        Nama barang tidak boleh kosong
                    </div>
                @enderror
            <label for="aplikasi" class="form-label mt-3">harga</label>
            <input value='{{$product->harga}}'type="integer" name="harga" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                 @error('harga')
                    <div class="invalid-feedback">
                        Nama barang tidak boleh kosong
                    </div>
                @enderror
                
            <label for="aplikasi" class="form-label mt-3">keterangan</label>
            <input value='{{$product->keterangan}}'type="text" name="keterangan" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('keterangan')
                    <div class="invalid-feedback">
                        Nama barang tidak boleh kosong
                    </div>
                @enderror
                
           <label for="aplikasi" class="form-label mt-3">kategori_id</label>
            <input value='{{$product->kategori_id}}'type="integer" name="kategori_id" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('kategori_id')
                    <div class="invalid-feedback">
                        Nama barang tidak boleh kosong
                    </div>
                @enderror
            <button class="btn btn-primary mt-3">simpan data</button>
        </form>
</div>

@endsection