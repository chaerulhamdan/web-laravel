@extends('layouts.master_user')

@section('title')
Acara
@endsection

@section('content')
{{-- Header Content --}}
<div class="row">
  <div class="col-lg-4 col-md-12 col-6 mb-4">
    <div class="card card-gradient" style="max-height: 150px">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="d-flex">
            <div class="me-2">
              <span class="badge bg-label-info p-2"><i class="bx bxs-calendar-event text-info"></i></span>
            </div>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Acara Soon</span>
        <h3 class="card-title mb-2">4</h3>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 col-6 mb-4">
    <div class="card card-gradient" style="max-height: 150px">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="d-flex">
            <div class="me-2">
              <span class="badge bg-label-success p-2"><i class="bx bx-calendar-check text-success"></i></span>
            </div>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Acara Done</span>
        <h3 class="card-title mb-2">3</h3>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12 col-6 mb-4">
    <div class="card card-gradient" style="max-height: 150px">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="d-flex">
            <div class="me-2">
              <span class="badge bg-label-info p-2"><i class="bx bx-group text-info"></i></span>
            </div>
          </div>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Total User</span>
        <h3 class="card-title mb-2">100</h3>
      </div>
    </div>
  </div>
</div>
{{-- End Header Content --}}

{{-- Button Modal Create --}}
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  <span class="tf-icons bx bxs-plus-square"></span>&nbsp; Tambahkan Acara
</button>
{{-- Button Modal Create --}}

{{-- Modal Create --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Create Acara</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('acara.store')}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-image">Image</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-image2" class="input-group-text"><i class="bx bxs-image-add"></i></span>
              <input type="file" class="form-control" name="image" id="basic-icon-default-image" aria-label="John Doe"
                aria-describedby="basic-icon-default-image2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-name">Title Acara</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-name2" class="input-group-text"><i class="bx bxs-pencil"></i></span>
              <input type="text" id="basic-icon-default-name" name="name" class="form-control" placeholder="Diesnatalis"
                aria-label="ACME Inc." aria-describedby="basic-icon-default-name2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-tanggal">Tanggal</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-calendar"></i></span>
              <input type="date" id="basic-icon-default-tanggal" name="date" class="form-control" aria-label="john.doe"
                aria-describedby="basic-icon-default-tanggal2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-deskripsi">Deskripsi</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-deskripsi2" class="input-group-text"><i class="bx bx-notepad"></i></span>
              <textarea id="basic-icon-default-deskripsi" class="form-control" placeholder="Deskripsi" name="desc"
                aria-describedby="basic-icon-default-deskripsi2"></textarea>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal Create --}}

{{-- card index --}}
<div class="row">
  @foreach ($acr as $acara )
  <div class="col-md-6">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="card-img card-img-left" src="{{ asset('storage/acara_images/'.$acara->image) }}"
            style="height: 100%;" alt="Card image" />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">{{ $acara->name }}</h5>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                  <a class="dropdown-item gradient-edit rounded" href="{{ route('acara.edit', $acara->id) }}">Edit</a>
                  <a class="dropdown-item gradient-detail rounded" href="{{ route('acara.show', $acara->id) }}">Detail</a>
                  <a class="dropdown-item gradient-delete rounded" href="{{ route('acara.destroy', $acara->id) }}">Delete</a>
                </div>
              </div>
            </div>
            <p class="card-text">
              {{ Str::limit($acara->desc, 30) }}
            </p>
            <p class="card-text"><small class="text-muted">{{ $acara->date }}</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
{{-- end card index --}}
@endsection