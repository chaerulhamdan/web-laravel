@extends('layouts.master_users')

@section('title')
Dashboard
@endsection

@section('content2')
Daftar Acara
@endsection

@section('btnDownload')
<a class="btn btn-primary btn-sm" style="max-height: 40px" href="{{ route('export-acara') }}">Export List Acara to PDF</a>
@endsection

@section('content')
<div class="card-group">
   @foreach ($acr as $acrus)    
   <div class="col-lg-4 p-0">
      <div class="card mb-3 mr-3">
        <img class="card-img-top" src="{{ asset('storage/acara_images/'.$acrus->image) }}" style="width: 100%" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ Str::Limit($acrus->name, 15) }}</h5>
          <p class="card-text">{{ Str::limit($acrus->desc, 100) }}</p>
        </div>
        <a class="btn btn-primary rounded block" href="{{ route('user.show', $acrus->id) }}">Detail Acara</a>
        <div class="card-footer">
          <small class="text-muted">{{ $acrus->date }}</small>
        </div>
      </div>
   </div>
   @endforeach
   {{ $acr->links() }}  
</div>
@endsection