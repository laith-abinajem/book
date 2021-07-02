<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>
 .sec1{
     text-align: center;
 }
 .sec1 input{
     text-align: center;
 }
</style>

</head>
<body>

<section class="sec1">
<form method="POST" action="{{route('store')}}">
    {{-- <input name="_token" value="{{csrf_token()}}"> --}}
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Your Name</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Namebook  </label>
      <input type="text" class="form-control" name="namebook">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="text" class="form-control" name="price">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">des</label>
        <input type="text" class="form-control" name="des">
      </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</section>
</body>
</html>