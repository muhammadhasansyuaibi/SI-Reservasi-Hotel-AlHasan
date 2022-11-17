<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Laporan Pengguna</title>
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
    <h2>Laporan Data Pengguna</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $printpdf_user as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->position }}</td>
            @endforeach
        </tbody>
    </table>                    
    <div class="footer">
        <p>Hotel Al-Hasan</p>
    </div>            
</body>
</html>