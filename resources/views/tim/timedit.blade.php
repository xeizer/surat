@extends('surat/layout')
@section('content')
<div class="container">
    <form action="/timupdate/{{$timkami->id}}" method="POST">
        @csrf
        <div class="row m-1">
            <div class="col-4">
                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
            </div>
            <div class="col-8">
                <input type="text" name="nama" class="form-control" value="{{$timkami->nama}}" placeholder="Nama Anda">
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4">
                <label for="jabatan" class="col-sm-4 col-form-label">Jabatan / Gelar</label>
            </div>
            <div class="col-8">
                <input type="text" name="jabatan" class="form-control" value="{{$timkami->jabatan}}" placeholder="Jabatan/Gelar Anda">
            </div>
        </div>

        <div class="row m-1">
            <div class="col-4">
                <label for="github" class="col-sm-4 col-form-label">Github</label>
            </div>
            <div class="col-8">
                <input type="text" name="github" class="form-control" value="{{$timkami->github}}" placeholder="url github anda (https://www.github.com)">
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4">
                <label for="facebook" class="col-sm-4 col-form-label">Facebook</label>
            </div>
            <div class="col-8">
                <input type="text" name="facebook" class="form-control" value="{{$timkami->facebook}}" placeholder="url facebook anda (https://www.facebook.com)">
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4">
                <label for="instagram" class="col-sm-4 col-form-label">Instagram</label>
            </div>
            <div class="col-8">
                <input type="text" name="instagram" class="form-control" value="{{$timkami->instagram}}" placeholder="url instagram anda (https://www.instagram.com)">
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4">
                <label for="youtube" class="col-sm-4 col-form-label">Youtube</label>
            </div>
            <div class="col-8">
                <input type="text" name="youtube" class="form-control" value="{{$timkami->youtube}}" placeholder="url youtube anda (https://www.youtube.com)">
            </div>
        </div>
        <div class="row m-1">
            <div class="col-4">
                <label for="twitter" class="col-sm-4 col-form-label">Twitter</label>
            </div>
            <div class="col-8">
                <input type="text" name="twitter" class="form-control" value="{{$timkami->twitter}}" placeholder="url twitter anda (https://www.twitter.com)">
            </div>
        </div>

        <div class="row m-1">
            <div class="col-4">
                <label for="foto_profil" class="col-sm-4 col-form-label">Foto Profil 1x1</label>
            </div>
            <div class="col-8">
                <input type="file" name="foto_profil" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-success float-right mr-3 mt-2">Simpan</button>
        <button type="reset" class="btn btn-warning float-right mr-3 mt-2">Reset</button>
        <button type="submit" class="btn btn-danger float-left ml-4 mt-2">Kembali</button>
    </form>
</div>
@endsection