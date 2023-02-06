@extends('payments.layout')
@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Registrasi</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th width="100px">Aksi</th>
                                        </tr>
                                        @foreach($user as $u)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$u->id}}</td>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->username}}</td>
                                            <td>{{$u->email}}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
@endsection