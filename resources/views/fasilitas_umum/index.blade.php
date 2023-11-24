@extends('layouts.admin', ['title'=>'Fas Umum'])

@section('content-header')
<h1 class="mb-0"><i class="far fa-building"></i>Fasilitas Umum</h1>
@endsection

@section('content')
<x-status/>
<br>
<div class="card">
    <div class="card-header">
        <!-- button create -->
        <x-btn-create :link="route('fasUmum.create')" />
        <!-- end button -->
       <x-search />
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tipe Kamar</th>
                    <th>Nama Fasilitas</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                <?php $no = $data->firstItem(); ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->tipe_kamar}}</td>
                    <td>{{ $row->nama_fas}}</td>
                    <td>
                    @if ($row)
                        <x-btn-edit :link="route('fasu.edit',['fasUid'=>$row->id])" />
                    @endif
                        <x-btn-delete :link="route('fasu.delete',['fasUid'=>$row->id])" />
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