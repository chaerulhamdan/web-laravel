@extends('layouts.master_admin')

@section('title')
list user
@endsection

@section('content')
   <div class="row justify-content-center">
       <div class="col-12">
       <div class="d-flex justify-content-between">
           <h2 class="mb-2 page-title">List User</h2>
           <a class="btn btn-primary" href="{{ route('export-users') }}"><span class="tf-icons bx bx-download"></span>&nbsp; Export Data to Excel</a>
       </div>
           <div class="row my-4">
               <!-- Small table -->
               <div class="col-md-12">
                   <div class="card shadow">
                       <div class="card-body">
                           <!-- table -->
                           <table class="table datatables" id="dataTable-1">
                               <thead>
                                   <tr>
                                       <th>No</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Umur</th>
                                       <th>Role</th>
                                       <th>Alamat</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @php
                                       $no = 1;
                                   @endphp
                                   @foreach ($list_user as $user )
                                   <tr>
                                       <td>{{ $no++ }}</td>
                                       <td>{{ $user->user->name }}</td>
                                       <td>{{ $user->user->email }}</td>
                                       <td>{{ $user->umur }}</td>
                                       <td>
                                        @if ($user->user->role == 1)
                                            Admin
                                        @else
                                            User
                                        @endif
                                    
                                        </td>
                                       <td>{{ $user->alamat }}</td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div> <!-- simple table -->
           </div> <!-- end section -->
       </div> <!-- .col-12 -->
   </div> <!-- .row -->
@endsection