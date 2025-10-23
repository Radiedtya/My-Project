<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #333;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .table-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            padding: 20px;
            max-width: 700px;
            margin: auto;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
        }

        thead {
            background: #4f46e5;
            color: #fff;
        }

        th, td {
            padding: 14px 16px;
            text-align: left;
        }

        tbody tr {
            transition: 0.3s;
        }

        tbody tr:nth-child(even) {
            background: #f9f9f9;
        }

        tbody tr:hover {
            background: #eef2ff;
            transform: scale(1.01);
        }

        /* Animasi masuk */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <h3>Daftar Barang</h3>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $b)
                <tr>
                    <td>{{ $b['nama'] }}</td>
                    <td>Rp{{ number_format($b['harga'], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
