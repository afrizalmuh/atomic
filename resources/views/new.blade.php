@extends('layout.template')
@section('content')
<section class="content-header">
    <h1>DOMPET<small>-Buat Baru</small></h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="create"></i>Kelola Dompet</a></li>
    </ol>
</section>

<form action="" method="post">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input name='name' type="text" class='form-control' placeholder='Nama'>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="reference">Referensi</label>
                    <input type="text" name='reference' class='form-control' placeholder='Referensi'>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <label for="">Deskripsi</label>
                <div class="form-group">
                    <textarea name="description" cols="150" rows="5" placeholder="Deskripsi"></textarea>
                </div>
            </div>
            <div class="col-sm-8">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="active">Aktif</option>
                    <option value="non-active">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <button class="button">Simpan</button>
    </div>
</form>
@endsection
