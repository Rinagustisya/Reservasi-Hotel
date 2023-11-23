@extends('layouts.admin',['title'=>'Fas Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-building"></i>Fasilitas Kamar</h1>
@endsection

@section('content')
<x-status/>
<br>
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
                    <th>Nama Fasilitas</th>
                    <th>Keterangan</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                <?php $no = $data->firstItem(); ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama}}</td>
                    <td>{{ $row->keterangan}}</td>
                    <td>
                    @if ($row)
                        <x-btn-edit :link="route('fask.edit',['fas'=>$row->id])" />
                    @endif
                        <x-btn-delete :link="route('fas.hapus',['fasilitas'=>$row->id])" />
                    </td>
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