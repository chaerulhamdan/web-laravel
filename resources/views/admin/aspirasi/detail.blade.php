@extends('layouts.master_admin')
@section('judul')
Detail 
@endsection

@section('content')
 <div class="card text-center">
   <div class="card-header">
      <div class="row">
         <div class="d-flex justify-content-between">
            <div class="">

            </div>
            Detail Aspirasi
            <a href="{{ route('aspirasi.index') }}"><i class='bx bxs-log-out mb-3 text-secondary'
                  style="font-size: 2rem"></i></a>
         </div>
      </div>
   </div>
   <div class="card-body">
      <h5 class="card-title">{{$aspirasi->judul}}</h5>
      <p class="badge bg-primary card-text">Author: {{$aspirasi->user_aspirasi->name}}</p>
      <p class="card-text">{{$aspirasi->isi}}</p>
   </div>
   <div class="card-footer text-muted">
      <div class="badge bg-primary gradient-edit">
         {{ $aspirasi->created_at }}
      </div>
   </div>
</div>
 
@endsection