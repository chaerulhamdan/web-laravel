@extends('layouts.master_users')
@section('title')
Tambah Absensi
@endsection

@section('content2')
Form Tambah Absensi
@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 mb-4 order-0">
     <div class="card ">
        <div class="d-flex align-items-end row">
           <div class="col-sm-12">
              <div class="card-body rounded shadow">
                 <h5 class="card-title text-primary">List Acara</h5>
                 <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Acara</th>
                        <th scope="col">Acara Id</th>
                      </tr>
                    </thead>
                    <tbody>
                       @forelse ($acara as $key => $value)
                       <tr>
                           <td>{{$key + 1}}</td>
                           <td>{{$value->name}}</td>
                           <td>{{$value->id}}</td>
                       </tr>
                   @empty
                       <tr>
                           <td>Tidak Ada Data</td>
                       </tr>
                   @endforelse
                   </tbody>
                  </table>
              </div>
           </div>
           
        </div>
     </div>
  </div>
</div>

<form action="/absensi" method="POST">
  @csrf
    <div class="mb-3">
      <label class="form-label">Acara (id)</label>
      <input type="number" class="form-control rounded" name="acara_id" >
    </div>
    @error('acara_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <div class="mb-3">
      <label class="form-label">Keterangan</label>
      <input type="text" class="form-control rounded" name="keterangan" >
    </div>
    @error('keterangan')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
