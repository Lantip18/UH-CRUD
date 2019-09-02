@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1>Tambah Barang</h1>
        <hr>
        @if($errors->any())
    
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </div>
        @endif

        <form action="{{ route('barang.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id">id : </label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="kd_barang">kd_barang : </label>
            <input type="text" class="form-control" id="kd_barang" name="kd_barang">
        </div>
        <div class="form-group">
            <label for="nama_barang">nama_barang : </label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="form-group">
            <label for="stok">stok : </label>
            <textarea class="form-control" name="stok" id="stok"></textarea>
        </div>
        <div class="form-group">
            <label for="harga">harga : </label>
            <textarea class="form-control" name="harga" id="harga"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
        </form>
    </div>
</section>
@endsection