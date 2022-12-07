@extends('layouts.master_admin')

@section('title')
Absensi
@endsection

@section('content')
<div class="row">
   <div class="col-lg-12 mb-4 order-0">
      <div class="card ">
         <div class="d-flex align-items-end row">
            <div class="col-sm-12">
               <div class="card-body">
                  <h5 class="card-title text-primary">List Absensi</h5>
                  <table class="table datatables" id="dataTable-1">
                     <thead>
                       <tr>
                         <th scope="col">#</th>
                         <th scope="col">User_id</th>
                         <th scope="col">Acara_id</th>
                         <th scope="col">Keterangan</th>
                         <th scope="col">Action</th>
                       </tr>
                     </thead>
                     <tbody>
                        @forelse ($absensi as $key => $value)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$value->user_id}}</td>
                            <td>{{$value->acara_id}}</td>
                            <td>{{$value->keterangan}}</td>
                            <td>
                                
                                <form action="/absensi/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/absensi/{{$value->id}}" class="btn gradient-detail btn-primary btn-sm"><i class='bx bxs-receipt' ></i></a>
                                    <a href="/absensi/{{$value->id}}/edit" class="btn gradient-edit btn-primary btn-sm"><i class='bx bxs-edit'></i></a>
                                    <button type="submit" value=""  class="btn gradient-delete btn-primary btn-sm"><i class='bx bx-trash' ></i></button>
                                </form>
                            </td>
                            
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
@endsection