@extends('layouts.admin',['title'=>'User Admin'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-users"></i>User Admin</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->username}}</td>
                    <td>{{ $row->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection