@extends('layouts.admin',['title'=>'Kamar'])

@section('content-header')
<h1 class="m-0"><i class="fas fa-bed"></i>Kamar</h1>
@endsection

@section('content')
<x-status/>
<div class="card">
    <div class="card-header">
        <!-- button create -->
        <x-btn-create :link="route('kamar.create')" />
        <!-- end button -->
       <x-search />
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tipe Kamar</th>
                    <th>Harga Kamar</th>
                    <th>Jumlah Kamar</th> 
                    <th>Aksi</th> 
                    <!-- <th>Deskripsi Kamar</th>  -->
                </tr>
            </thead>
            <tbody>
                <?php $no = $data->firstItem(); ?>
                @foreach ( $data as $row ) 
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ ucwords($row->nama_kamar) }}</td>
                    <td>Rp. {{ number_format($row->harga_kamar,2,',','.') }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                        <x-btn-edit :link="route('kamar.edit',['kamar'=>$row->id])" />
                        <x-btn-delete :link="route('kamar.destroy',['kamar'=>$row->id])" />
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