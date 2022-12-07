@extends('layouts.master_admin')

@section('title')
detail acara
@endsection

@section('content')
<div class="card mb-3">
   <div class="row g-0">
      <div class="col-md-4">
         <img class="card-img card-img-left" src="{{ asset('storage/acara_images/'.$acr->image) }}"
            style="height: 100%;" alt="Card image" />
      </div>
      <div class="col-md-8">
         <div class="card-body">
            <div class="d-flex justify-content-between">
               <h5 class="card-title">{{ $acr->name }}</h5>
               <a href="{{ route('acara.index') }}"><i class='bx bxs-log-out mb-3 text-secondary' style="font-size: 2rem"></i></a>
            </div>
            <p class="card-text">
               {{ $acr->desc }}
            </p>
            <p class="card-text"><small class="text-muted">{{ $acr->date }}</small></p>
         </div>
      </div>
   </div>
</div>
@endsection