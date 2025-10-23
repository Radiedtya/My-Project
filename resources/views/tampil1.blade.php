<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Nama</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 40px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .list-container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 25px 35px;
            max-width: 550px;
            margin: auto;
            animation: fadeIn 1s ease-in-out;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: linear-gradient(90deg, #f8f9fa, #eef2ff);
            margin: 12px 0;
            padding: 14px 18px;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 500;
            color: #374151;
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        li:hover {
            background: linear-gradient(90deg, #6366f1, #3b82f6);
            color: #fff;
            transform: translateX(8px) scale(1.02);
            box-shadow: 0 6px 15px rgba(59, 130, 246, 0.3);
        }

        /* Animasi masuk */
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <h1>Daftar Nama</h1>

    <!-- tampilkan semua data array yang dikirim dari route -->
    <div class="list-container">
        <ul>
            @foreach ($nama as $data)
                <li>{{ $data }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
