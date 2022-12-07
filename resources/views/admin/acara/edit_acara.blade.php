@extends('layouts.master_admin')

@section('title')
Edit Acara
@endsection

@section('content')
<div class="card">
   <div class="card-header">
      <h5>Form Edit Acara</h5>
   </div>
   <div class="card-body">
      <div class="container">
         <form method="post" action="{{ route('acara.update', $acr->id) }}" id="myForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
               <label class="form-label" for="basic-icon-default-image">Image</label>
               <div class="input-group input-group-merge">
                  <span id="basic-icon-default-image2" class="input-group-text"><i class="bx bxs-image-add"></i></span>
                  <input type="file" class="form-control" name="image" value="{{ $acr->image }}" id="basic-icon-default-image" aria-label="John Doe"
                     aria-describedby="basic-icon-default-image2"/>
               </div>
            </div>
            <div class="row">
               <div class="mb-3 col-lg-6">
                  <label class="form-label" for="basic-icon-default-name">Title Acara</label>
                  <div class="input-group input-group-merge">
                     <span id="basic-icon-default-name2" class="input-group-text"><i class="bx bxs-pencil"></i></span>
                     <input type="text" id="basic-icon-default-name" name="name" value="{{ $acr->name }}" class="form-control" placeholder="Diesnatalis"
                        aria-label="ACME Inc." aria-describedby="basic-icon-default-name2" />
                  </div>
               </div>
               <div class="mb-3 col-lg-6">
                  <label class="form-label" for="basic-icon-default-tanggal">Tanggal</label>
                  <div class="input-group input-group-merge">
                     <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                     <input type="date" id="basic-icon-default-tanggal" name="date" value="{{ $acr->date }}" class="form-control" aria-label="john.doe"
                        aria-describedby="basic-icon-default-tanggal2" />
                  </div>
               </div>
            </div>
            <div class="mb-3">
               <label class="form-label" for="basic-icon-default-deskripsi">Deskripsi</label>
               <div class="input-group input-group-merge">
                  <span id="basic-icon-default-deskripsi2" class="input-group-text"><i class="bx bx-notepad"></i></span>
                  <textarea id="basic-icon-default-deskripsi" class="form-control" placeholder="Deskripsi" name="desc"
                     aria-describedby="basic-icon-default-deskripsi2" style="height: 150px;">{{ $acr->desc }}</textarea>
               </div>
            </div>
            </div>
            <div class="modal-footer">
               <a href="{{ route('acara.index') }}" type="button" class="btn btn-secondary">Cancel</a>
               <button type="submit" class="btn btn-primary">Update</button>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection