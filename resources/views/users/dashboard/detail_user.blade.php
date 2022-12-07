@extends('layouts.master_users')

@section('title')
Dashboard
@endsection

@section('content2')
Detail Acara
@endsection

@section('content')
<div class="card-deck">
   <div class="card">
      <img class="card-img-top" src="{{ asset('storage/acara_images/'. $acr->image) }}" style="width: 100%" alt="Card image cap">
      <div class="card-body">
         <h5 class="card-title">{{ $acr->name }}</h5>
         <p class="card-text">{{ $acr->desc }}</p>
         <div class="d-flex justify-content-between">
            <p class="card-text"><small class="text-muted">{{ $acr->date }}</small></p>
            <a class="btn btn-secondary rounded" href="{{ route('user.index') }}">Back</a>
         </div>
      </div>
   </div>
</div>

@endsection