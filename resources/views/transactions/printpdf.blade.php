<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Laporan Transaksi</title>
    <style>
    table {
        font-family: 'Times New Roman', Times, serif, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    table td, table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table tr:nth-child(even){background-color: #f2f2f2;}

    table tr:hover {background-color: #ddd;}

    table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #2a2a2a;
        color: white;
    }

    p {
        text-align: right;
    }

    .footer p {
        text-align: left;
    }

    h2 {
        text-align: center;
    }
    </style>
</head>
<body>
    <p>Date: {{ date('d M Y') }}</p>
    <h2>Laporan Data Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Nama Konsumen</th>
                <th>Kamar</th>
                <th>Layanan</th>
                <th>Cek In</th>
                <th>Cek Out</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $printpdf_transaction as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user['name'] }}</td>
                <td>{{ $item->customer['name'] }}</td>
                <td>{{ $item->room['name'] }}</td>
                <td>{{ $item->service['name'] }}</td>
                <td>{{ $item->cekin_date }}</td>
                <td>{{ $item->cekout_date }}</td>
                <td>{{'Rp.'.number_format ($item->total_cost, 0, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="left">
                    <strong>Total</strong>
                </td>
                <td class="right">
                    <strong>{{'Rp.'.number_format ($item->total_cost, 0, ',', '.') }}</strong>
                </td>
            </tr>
        </tbody>
    </table>                    
    <div class="footer">
        <p>Hotel Al-Hasan</p>
    </div>            
</body>
</html>