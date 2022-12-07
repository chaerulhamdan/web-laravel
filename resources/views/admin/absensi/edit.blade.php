@extends('layouts.master_admin')
@section('title')
Edit Absensi
@endsection

@section('content')

<form action='/absensi/{{$absensi->id}}' method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
      <label class="form-label">Acara</label>
      <input type="number" class="form-control" value="{{ $absensi->acara_id }}" name="acara_id" >
    </div>
    @error('acara_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="mb-3">
      <label class="form-label">Keterangan</label>
      <input type="text" class="form-control" value="{{ $absensi->keterangan }}" name="keterangan" >
    </div>
    @error('keterangan')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
