@extends('layouts.tamu', ['title'=>'Cetak Bukti'])

@section('content')
<div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="{{ url('images/logobulat.PNG') }}" style="width: 100%; max-width: 88px" />
                                </td>
                                <td>
                                    Invoice #: {{ $invoiceData['invoice_id'] }}<br />
                                    Created: {{ $invoiceData['creation_date'] }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    {{ $data->first()->nama_pemesan }}<br />
                                </td>
                                <td>
                                {{  $data->first()->nama_tamu  }}<br />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td>Payment Method</td>
                    <td># Transaction Id</td>
                </tr>
                <tr class="details">
                    <td>{{ $invoiceData['payment_method'] }}</td>
                    <td>{{ $invoiceData['transaction_id'] }}</td>
                </tr>
                <tr class="heading">
                    <td>Jenis Kamar</td>
                    <td>Jumlah Kamar</td>
                    <td>Tanggal Check-Out</td>
                </tr>
                @foreach($data as $item)
                    <tr class="item @if($loop->last) last @endif">
                        <td>{{ $data->first()->jenis_kamar }}</td>
                        <td>${{ $data->first()->jumlah_kamar }}</td>
                        <td>${{ $data->first()->check_out }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
@endsection