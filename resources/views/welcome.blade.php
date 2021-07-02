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
        <!-- Styles -->
        <style>
     body{
       background-color:white;
     }
     .div1{
 margin-left: -40px;
 margin-top: 10px;
       
     }
     .sec2{
       
       background-color: brown;
       margin-top: -15px;
       height: 50px;
       
       
     }
     .sec2 a{
       margin-top: 10px;
     }
     .div2 a{
      display: inline-block;
padding-left: 15px;
 border-style:hidden;
 letter-spacing: .64px;
font-size: 20px;
color: aliceblue;

     }
     .div2 a:hover{
      text-decoration: underline;
      
     }
     .div0 a{
       padding-left: 20px;
       color: brown;
     }
     .card {
    border: none;

}

.search {
    width: 100%;
    margin-top: -77px;
   margin-left: 210px;
    height: 50px;
    background-color: brown;
    padding: 10px;
    border-radius: 5px
}

.search-input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    margin-top: 5px;
    caret-color: transparent;
    line-height: 20px;
    transition: width 0.4s linear
}

.search .search-input {
    padding: 0 10px;
    width: 100%;
    caret-color: white;
    font-size: 19px;
    font-weight: 300;
    color: white;
    transition: width 0.4s linear
}

.search-icon {
    height: 34px;
    width: 34px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
    background-color: white;
    font-size: 10px;
    bottom: 30px;
    position: relative;
    border-radius: 5px
}

.search-icon:hover {
    color: #fff !important
}

a:link {
    text-decoration: none
}

.sec3{
margin-top: 15px;
}
.swiper-container {
        width: 100%;
        height: 90%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 90%;
        height: 100%;
        object-fit: cover;
      }
      .our{
        text-align: center;
        margin-top:15px;

      }

.card{
  padding: 15px;
  text-align: center;
  margin-top:15px;
}
.card p{
  text-align: center
}
.card a {
  text-align: center;
}
.sec4{
  border-style: inset;
  border-color: brown;
  border-radius: 10px;
  
}
.showdiv{
 text-align: center;


 
  border-radius: 10px;
  padding: 10px;
 
}
.showdiv:hover a{
  color:white;
}
.show{
  color: white;
}

.dropbtn {
  background-color: brown;
  color: white;
  padding: 30px  ;

  text-align: center;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 113px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.sec5{
  height: 500px;
}
.dropdown-content a:hover {background-color: brown;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: brown;}   
.divnav{
  background-color: brown;
  height: 60px;
  width: 100%;
  text-align: center;
  
}

.divnav a{
  display: inline-block;
padding-left: 15px;
 border-style:hidden;
 letter-spacing: .64px;
 
font-size: 16px;
color: white;
margin-top: 10px;

}
.divnav a:hover{
  text-decoration: underline;
}
.showdiv{
  background-color: brown;
  width: 80%;
  height: 40px;
  text-align: center;
  margin-left: 120px;
}
.showdiv a{
  color: white;
}
.card{
  border-style: inset;
  border-color: brown;
  border-radius:10px;
  border-top-width: 0px;
 

}
.card hr{
  color: brown;
}
.sec5 h1{
  text-align: center;
  margin-top: 18px;
}
.sec5 h3{
margin-left: 20px;
}
.sec5 h5{
  margin-left: 20px;
}
.sec5 a{
  margin-left: 45px;
  border-style: inset;
  border-radius: 10px;
  border-color: brown;
  background-color: brown;
  color: white;
  height: 40px;
}
        </style>
    </head>
    <body>

<section class="sec1">
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-3">
<div class="div0">
 

  <a href="">Register </a>
  <a href="">Connect with us </a>
  <a href="cart"><i class="fas fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}</a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
</div>
      <div class="div1">
       <img src="logo.png" alt="">
      </div>
      
    </div>
    
  </div>
</div>
<div class="container mt-4">
  <div class="row ">
      <div class="col-lg-9 col-md-6 col-sm-3">
        
              
              <div class="d-flex justify-content-center px-5">
                  <div class="search"> 
                    <input type="text" class="search-input" placeholder="Search..." name="">
                     <a href="#" class="search-icon"> <i class="fa fa-search"></i> 
                    </a> </div>
              </div>
      
         
      </div>
  </div>
</div>
</section>
<section class="sec2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-6 col-sm-3">
        <div class="div2">
          <a href="">Home</a>
          @if (Route::has('login'))
      
          @auth             
      {{-- <a class="" href="{{ url('/home') }}"> Home</a> --}}
      @else
                       
      <a class="" href="{{ route('login') }}">Login</a>

      @if (Route::has('register'))
                
      <a class="" href="{{ route('register') }}">Register</a>
  @endif
@endauth
@endif    
     
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec3">
  <body>
    <!-- Swiper -->
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="16143769_1329302077144241_453777392109632252_o.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <img src="82463834_3338942859513476_127765806653112320_n.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="82539638_3338942849513477_7092071494913622016_n.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="18077123_1444746052266509_553803034381008427_o.jpg" alt="">
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

</section>
<hr>
<H1 class="our" >Our Books</H1>
<section class="sec4">


<div class="divnav">
  <a href="s">الكتب السياسية</a>
  <a href="g">التاريخ والجغرافيا</a>
  <a href="s">الرياضة والتسلية </a>
  <a href="s">الكتب الإسلامية</a>
  <a href="s">الأدب والخيال</a>
  <a href="s">الاقتصاد والأعمال</a>
</div>
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
<div class="showdiv">
  
<a href="show"> Show All Books </a>
  
</div>

</section>
<section class="sec5">
<h1>
  Enjoy the experience of selling your old book to buy a new one 
</h1>
<hr>
<h3>Steps :</h3>
<h5>1- Prepare your book</h5>
<h5>2- Clean it well</h5>
<h5>3- Take a picture of him</h5>
<h5>4- Press Start</h5>
<a href="create">Start Now</a>
</section>
 
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js" integrity="sha512-xbl0smDcemxvxGBO15P8UbrrP1TWMfT2VQq0uggureCJQGr7umzx72azYCQLospxRd9RvMqRGJcKjrmbJ5cWQA==" crossorigin="anonymous"></script>
    <script src="jquery.vide.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
