@extends('layouts.admin',['title'=>'Monitoring'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-desktop"></i>Monitoring</h1>
@endsection

@section('content')
<x-status/>
<div class="card">
    <div class="card-header">
       <x-search />
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Tamu</th>
                    <th>Check in</th>
                    <th>Check Out</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <!-- <th>Deskripsi Kamar</th>  -->
                </tr>
            </thead>
            <tbody>
                <?php $no = $data->firstItem(); ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama_tamu }}</td>
                    <td>{{ $row->check_in }}</td>
                    <td>{{ $row->check_out }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                        <x-btn-show :link="route('moni.showData',['pesan'=>$row->id])" />
                    </td>
                    <!-- <td>{{ $row->deskripsi_kamar }}</td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-body py-0">
        {{ $data->appends(['search' => request()->search , 'checkin' => request()->checkin ])->links('pagenation') }}
    </div>
</div>
@endsection

@section('modal')
<x-modal-delete />
@endsection