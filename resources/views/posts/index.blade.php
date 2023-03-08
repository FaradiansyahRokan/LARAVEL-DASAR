<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



    <style>
        .body {
            padding: 5px;
            border-bottom: 2px solid black;

        }

        small {
            color: grey;
        }
    </style>
</head>

<body>

    <div class="container my-4">
        <h1>Postingan
          <a href="{{ url('posts/create')}}" class="btn btn-outline-success">Buat Postingan</a>
        </h1>


        @foreach($posts as $p )
        @php($p= explode(",",$p))
        

        <div class="card my-4" style="width: 58rem;">
            <div class="card-body">
                <h5 class="card-title">{{$p[1]}}</h5>
                <p class="card-text">{{$p[2]}}</p>
                <p class="card-text"><small class="text-muted">{{ date("d M Y H:i", strtotime('$p[3]')) }}</small></p>
                <a href="{{ url("posts/$p[0]") }}" class="btn btn-outline-primary">selengkapnya</a>
                
            </div>
        </div>



        @endforeach
    </div>
    <!-- {{--Link JS Bootstrap --}} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>