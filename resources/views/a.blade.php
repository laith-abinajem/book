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
    .div{
       background-color: brown;
    
       height: 90px;
    }
    .div img{
        margin-left: 10px;
    }
    .div a{
        color: white;
        size: 10px;
        text-decoration:none;
        padding: 10px;
    }
    .card{
        border-color: brown;
        margin-top: 20px;
    }
    .card h3{
        text-align: center;
    }
    .card p{
        text-align: center;
    }
    .card h5{
        text-align: center;
    }
</style>

</head>
<body>
    <section class="sec4">
<div class="div">
      <a href="/">  <img src="logo.png" alt=""> </a>
        <a href="s">الكتب السياسية</a>
        <a href="g">التاريخ والجغرافيا</a>
       
</div>
        <div class="row">
          @forelse($books as $book)
          <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                  <img class="card-img-top"
                       src="{{ $book->imgbook }}"
                       data-holder-rendered="true"
                       style="width:300;height:350px">
                       
                  <div class="card-body">
                      <H3 class="card-text">{{ $book->namebook }}</H3>
                      <hr>
                      <H5 class="card-text">{{ $book->typebook }}</H5>
                      <p class="card-text">{{ $book->desbook }}</p>
                      <hr>
                      <div class="d-flex justify-content-between align-items-center">
                          
                          <div class="btn-group">
                          
                              <a href="/posts/{{ $book->namebook }}{{ $book->id }}" class="btn btn-sm btn-outline-secondary">View</a>
                          </div>
                          <small class="text-muted">{{ $book->pricebook }} JD</small>
                      </div>
                  </div>
              </div>
          </div>
          @empty
              <p>No Posts Currently</p>
          @endforelse
    
      
      </section>
</body>
</html>