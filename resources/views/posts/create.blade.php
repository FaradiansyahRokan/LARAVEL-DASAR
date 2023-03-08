<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="container">
    <h1>Buat Postingan Baru</h1>

   <form action="{{ url('posts')}}" method="POST">
    @csrf
   <div class="mb-3">

   <!-- textArea nya -->
  <label for="exampleFormControlInput1" class="form-label">What is Your Title</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="What in Your Mind now ?" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Type Your content here</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>

<!-- Tombol untuk submit dan kembali -->
    <button class="btn btn-primary" type="submit">Submit</button>
    <a href="{{ url('posts')}}" class="btn btn-outline-success">Kembali</a>
   </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>