<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Post</title>
</head>
<body>
    
<h2 align='center'>Data Post</h2>
<table border=1 align='center' cellpadding=10 cellspacing=>
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    @foreach ($post as $p)
    <tbody>
        <tr>
            <td></td>
            <td>{{ $p->id }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->content }}</td>
            <td><strong>{{ $p->created_at }}</strong></td>
            <td><strong>{{ $p->updated_at }}</strong></td>
        </tr>
    </tbody>
    @endforeach

</body>
</html>