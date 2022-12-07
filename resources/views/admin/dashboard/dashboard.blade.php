@extends('layouts.master_admin')

@section('title')
Dashboard
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
        <h3 class="card-title mb-2">{{ $son }}</h3>
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
        <span class="fw-semibold d-block mb-1">Total Acara</span>
        <h3 class="card-title mb-2">{{ $acr }}</h3>
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
        <h3 class="card-title mb-2">{{ $adm }}</h3>
      </div>
    </div>
  </div>
</div>
{{-- End Header Content --}}

<div class="row">
  <div class="col-lg-12 mb-4 order-0">
    <div class="card card-gradient">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Welcome, {{ Auth::user()->name }}🎉</h5>
            <p class="mb-4">
              You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
              your profile.
            </p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
              alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
              data-app-light-img="illustrations/man-with-laptop-light.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection