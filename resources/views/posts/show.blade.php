<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- local bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- self css -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>

<body>
    <article class="container blog-post my-4">
        <h2 class="blog-post-title mb-1">{{$post[1]}}</h2>
        <p class="blog-post-meta">{{$post[3]}} <a href="#">Mark</a></p>

        <p>{{$post[2]}}</p>
        
        <a href="{{ url('posts')}}" class="btn btn-success">Kembali</a>
    </article>

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>