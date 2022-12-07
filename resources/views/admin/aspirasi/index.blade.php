@extends('layouts.master_admin')

@section('title')
Aspirasi
@endsection
@push('notice')
<script>
   swal ( "Oops" ,  "Something " ,  "error" )
</script>

@endpush

@section('content')
<div class="row">
   <div class="col-lg-12 mb-4 order-0">
      <div class="card ">
         <div class="d-flex align-items-end row">
            <div class="col-sm-12">
               <div class="card-body">
                  <h5 class="card-title text-primary">List Aspirasi</h5>
                  <table class="table datatables" id="dataTable-1">
                     <thead>
                       <tr>
                         <th scope="col">#</th>
                         <th scope="col">Judul Aspirasi</th>
                         <th scope="col">Aksi</th>
                       </tr>
                     </thead>
                     <tbody>
                        @forelse ($aspirasi as $key => $value)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$value->judul}}</td>
                            <td>
                                
                                <form action="/aspirasi/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/aspirasi/{{$value->id}}" class="btn btn-primary gradient-detail btn-sm"><i class='bx bxs-receipt' ></i></a>
                                    <button type="submit" value=""  class="btn btn-primary gradient-delete btn-sm"><i class='bx bx-trash' ></i></button>
                                   
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
