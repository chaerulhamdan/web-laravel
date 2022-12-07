@extends('layouts.master_users')
@section('title')
Tambah Aspirasi
@endsection

@section('content2')
Form Tambah Aspirasi
@endsection

@section('content')

<form action="/aspirasi" method="POST">
  @csrf
    <div class="mb-3">
      <label class="form-label">Judul Aspirasi</label>
      <input type="text" class="form-control rounded" name="judul" >
    </div>
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="mb-3">
      <label class="form-label">Isi Aspirasi</label>
      <textarea name="isi" class="form-control rounded"></textarea>
    </div>
    @error('isi')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
