<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

<style type="text/css">
    .team-section{
        overflow: hidden;
        text-align: center;
        background: rgb(245, 245, 245);
        padding: 60px;
    }
    .team-section h1{
        text-transform: uppercase;
        margin-bottom: 60px;
        font-size: 40px;
    }
    .border{
        display: block;
        margin: auto;
        width: 160px;
        height: 3px;
        margin-bottom: 40px;
        background: rgb(245, 245, 245);
    }
    .ps{
        margin-bottom: 40px;
    }
    .ps a{
        display: inline-block;
        margin: 0 30px;
        width: 160px;
        height: 160px;
        overflow: hidden;
        border-radius: 50%;
    }
    .ps img{
        width: 100%;
        filter: grayscale(100%);
        transition: 0.4s all;
    }
    .ps a:hover > img{
        filter: none;
    }
    .section{
        width: 600px;
        margin: auto;
        font-size: 20px;
        text-align: justify;
        height: 0;
        overflow: hidden;
    }
    .section:target{
        height: auto;
    }
    .name{
        display: block;
        margin-bottom: 30px;
        text-align: center;
        text-transform: uppercase;
        font-size: 22px;
    }
</style>
    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo">ShopTopia</div>
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <h1>Shop Topia</h1>
                        <p>Sebuah Website Ecommerce dengan Proses Checkout dan Ada kupon Bagi Kamu Yang Ingin Mendapatkan Potongan Harga, Website Ecommerce ini dibuat Menggunakan Framework Laravel.</p>
                        <div class="hero-buttons">
                            <a href="https://www.youtube.com/playlist?list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR" class="button button-white">Watch</a>
                            <a href="https://github.com/drehimself/laravel-ecommerce-example" class="button button-white">GitHub</a>
                        </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image">
                        <img src="img/logo.png" alt="hero image">
                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>

            <div class="featured-section" style="background: #f5f5f5">

                <div class="container">
                    <h1 class="text-center">Shop Topia</h1>

                    <p class="section-description">Menyediakan berbagai Kebutuhan Elektronik.</p>

                    {{-- <div class="tabs">
                        <div class="tab">
                            Featured
                        </div>
                        <div class="tab">
                            On Sale
                        </div>
                    </div> --}}

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">View more products</a>
                    </div>

                    <div class="team-section">
                        <h1>Our Team</h1>
                        <span class="border"></span>
                        <div class="ps">
                            <a href="#p1"><img src="img/faridl.jpg" alt=""></a>
                            <a href="#p2"><img src="img/mamat.png" alt=""></a>
                            <a href="#p3"><img src="img/hasbi.jpg" alt=""></a>
                            <a href="#p4"><img src="img/daffa.jpg" alt=""></a>
                        </div>
                    </div>
                        <div class="section" id="p1">
                            <span class="name">Miftah Faridl</span>
                            <span class="border"></span>
                        </div>
                        <div class="section" id="p2">
                            <span class="name">Aulia Ahmad</span>
                            <span class="border"></span>
                        </div>
                        <div class="section" id="p3">
                            <span class="name">Hasbi Hismanudin</span>
                            <span class="border"></span>
                        </div>
                        <div class="section" id="p4">
                            <span class="name">Daffa Sulthon Kautsar</span>
                            <span class="border"></span>
                        </div>
                    

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
