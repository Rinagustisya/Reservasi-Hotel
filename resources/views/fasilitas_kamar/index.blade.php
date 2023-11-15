@extends('layouts.admin',['title'=>'Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Fasilitas Kamar</h1>
@endsection

@section('content')
<x-status/>
<div class="card">
    <div class="card-header">
        <!-- button create -->
        <x-btn-create :link="route('fasilitas.create')" />
        <!-- end button -->
       <x-search />
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Failitas</th>
                    <th>Gambar</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                <?php $no = $data->firstItem(); ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama_kamar }}</td>
                    <td>{{ $row->harga_kamar }}</td>
                    <td>
                        <x-btn-edit :link="route('fasilitas.edit',['fasilitas'=>$row->id])" />
                        <x-btn-delete :link="route('fasilitas.destroy',['fasilitas'=>$row->id])" />
                    </td>
                    <!-- <td>{{ $row->deskripsi_kamar }}</td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-body py-0">
        {{ $data->appends(['search' => request()->search ])->links('pagenation') }}
    </div>
</div>
@endsection

@section('modal')
<x-modal-delete />
@endsection