<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siswa model</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            max-width: 900px;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 14px rgba(0,0,0,0.1);
        }

        thead {
            background: #2c3e50;
            color: #ecf0f1;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        thead th {
            padding: 14px 20px;
            font-size: 14px;
            text-align: left;
        }

        tbody td {
            padding: 12px 20px;
            border-bottom: 1px solid #e6e9ef;
            font-size: 14px;
            color: #2c3e50;
        }

        tbody tr:hover {
            background-color: #f0f4f8;
            transition: 0.2s;
        }

        tbody tr:nth-child(even) {
            background-color: #fafbfc;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
            </tr>
        </thead>

        @foreach ($siswa as $s)
        <tbody>
            <tr>
                <td>{{$s->nama_lengkap}}</td>
                <td>{{$s->jenis_kelamin}}</td>
                <td>{{$s->tanggal_lahir}}</td>
                <td>{{$s->kelas}}</td>
            </tr>
        </tbody>
        @endforeach

    </table>
</body>
</html>
