<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTS</title>
</head>
<body>
    <h1>Rokan</h1>
    <!-- Menampilkan 1 var (menggunakan 2 kurung kurawal) -->
    {{ $posts }}

    @foreach($posts as $post)
        {{ $post }}<br/>
    @endforeach
</body>
</html>