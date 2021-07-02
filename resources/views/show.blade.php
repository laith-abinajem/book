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
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    .sec4{
        width: 85%;
        margin-left: 8%
    }
    .sec1{
text-align: center;
    }
    .div{
       color: brown;
       word-spacing: 5px;
    }
    .card{
        
  border-style: inset;
  border-color: brown;
  border-radius:10px;

height: 97%;

}
.card hr{
  color: brown;
}
.card h3{
    text-align: center;
}
.card p{
    text-align: center;
}
  
#back{
		float:left;
		margin-left:60px;
		margin-top:4px;
		}
  
        .back-to-top i {
            
    display:block;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    width: 44px;
    height: 44px;
    border-radius: 50px;
    color: #ffffff;
    transition: all 0.4s;
    border: 6px solid #4D1035;
    position: fixed;
}
    
</style>

</head>
<body>
    <section class="sec1">
      <h1>  all books</h1>
      <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    </section>
<section class="sec4">

<div data-aos="zoom-in-up">
    <div class="border">
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
                      <p class="card-text">{{ $book->desbook }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <form action="{{ route('cart.store') }}" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" value="{{ $book->id }}" id="id" name="id">
                          <input type="hidden" value="{{ $book->namebook }}" id="name" name="name">
                          <input type="hidden" value="{{ $book->pricebook }}" id="price" name="price">
                          <input type="hidden" value="{{ $book->imgbook }}" id="img" name="img">
                       
                          <input type="hidden" value="1" id="quantity" name="quantity">
                          <div class="card-footer" style="background-color: white;">
                                <div class="row">
                                  <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                      <i class="fa fa-shopping-cart"></i> add to cart
                                  </button>
                              </div>
                          </div>
                      </form>
                          <small class="text-muted">{{ $book->pricebook }} JD</small>
                      </div>
                      
                  </div>
              </div>
          </div>
          @empty
              <p>No Posts Currently</p>
          @endforelse
      </div>
      </div>
    </div>
  </section>
  <a href="/" id="back" ><i class="fa fa-arrow-circle-left"  style="font-size:50px; "></i></a>
  
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>