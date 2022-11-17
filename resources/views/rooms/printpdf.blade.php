<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Laporan Kamar</title>
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
    <h2>Laporan Data Kamar</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kamar</th>
                <th>Tipe Kamar</th>
                <th>Tarif</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $printpdf_room as $room)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->type }}</td>
                <td>{{'Rp.'.number_format ($room->rates, 0, ',', '.') }}</td>
            @endforeach
        </tbody>
    </table>                    
    <div class="footer">
        <p>Hotel Al-Hasan</p>
    </div>            
</body>
</html>