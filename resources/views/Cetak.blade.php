<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Reservasi</title>
    <style>
          
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-Bold.ttf") }}) format("truetype");
                font-weight: 700;
                font-style: normal;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-BoldItalic.ttf") }}) format("truetype");
                font-weight: 700;
                font-style: italic;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-ExtraBold.ttf") }}) format("truetype");
                font-weight: 800;
                font-style: normal;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-ExtraBoldItalic.ttf") }}) format("truetype");
                font-weight: 800;
                font-style: italic;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-Light.ttf") }}) format("truetype");
                font-weight: 300;
                font-style: normal;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-LightItalic.ttf") }}) format("truetype");
                font-weight: 300;
                font-style: italic;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-Medium.ttf") }}) format("truetype");
                font-weight: 500;
                font-style: normal;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-MediumItalic.ttf") }}) format("truetype");
                font-weight: 500;
                font-style: italic;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-Regular.ttf") }}) format("truetype");
                font-weight: 400;
                font-style: normal;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-SemiBold.ttf") }}) format("truetype");
                font-weight: 600;
                font-style: normal;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-SemiBoldItalic.ttf") }}) format("truetype");
                font-weight: 600;
                font-style: italic;
            }
    
            @font-face {
                font-family: 'Open Sans';
                src: url({{ storage_path("fonts/static/OpenSans-Italic.ttf") }}) format("truetype");
                font-weight: 400;
                font-style: italic;
            }
    
            body {
                font-family: 'Open Sans', sans-serif;
            }
</style>
</head>
<body>
<div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="images/logobulat.PNG" style="width: 100%; max-width: 88px" />
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
                                    {{ $firstData->nama_pemesan }}<br />
                                </td>
                                <td>
                                {{  $firstData->nama_tamu  }}<br />
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
                        <td>{{ $item->jenis_kamar }}</td>
                        <td>${{ $item->jumlah_kamar }}</td>
                        <td>${{ $item->check_out }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
</body>
</html>