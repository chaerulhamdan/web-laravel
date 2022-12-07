@extends('layouts.master_users')

@section('title')
Profile
@endsection

@section('content2')
Halaman Profile
@endsection

@section('content')
<div class="card shadow rounded mt-5">
   <div class="card-header">
      Profile
   </div>
   <div class="card-body">
      <h5 class="card-title">Profile User</h5>
      <p class="card-text">Nama : {{$users->name}}</p>
      <p class="card-text">Email : {{$users->email}}</p>
      <p class="card-text">Umur : {{$profile->umur}}</p>
      <p class="card-text">Alamat : {{$profile->alamat}}</p>
      <a href="#" class="btn btn-primary">Update</a>
   </div>
</div>

@endsection