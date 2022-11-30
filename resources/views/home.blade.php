<!DOCTYPE html>

<head>

    <!-- Start Links -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Start Home Style -->
    <link rel="stylesheet" href="css/index_style.css">
    <!-- End Home Style -->

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,400&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- End Links -->

    <title>Cara</title>

</head>


<body>
    @include("layout.navbar")
    <!-- Start Hero -->

    <section id="hero">

        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more woth coupons & up to 70% off!</p>
        <button>Shop Now!</button>

    </section>

    <!-- End Hero -->

    <!-- start Feature-->
    <section id="feature" class="section-p1">
        <div class="fe-1">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f4.png" alt="">
            <h6>Promitions</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-1">
            <img src="img/features/f6.png" alt="">
            <h6>F7/24 Support</h6>
        </div>
    </section>
    <!-- End Feature-->

    <!-- Start New Arrival or productCard Features -->
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <div class="pro-container">
            @foreach($res as $item)
            <div class="pro">
                <img src="img/products/{{$item->imgPath}}" alt="p1">
                <div class="des">
                    <span>adidas</span>
                    <h5>{{$item->name}}</h5>
                    
                    <h4>{{$item->price}}</h4>
                    <a href="/addCart/{{$item->id}}/{{Session::get('userID')}}" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End New Arrival -->
   
    <section id="bannar3" class="section-p1">
        <div class="bannar-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
        <div class="bannar-box bannar-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
        <div class="bannar-box bannar-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
    </section>

    @include("layout.footer")

    <script src="js/all.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/main.js"></script>
</body>

</html>

</html>