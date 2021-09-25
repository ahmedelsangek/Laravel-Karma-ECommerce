<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>
    <!--
			CSS
			============================================= -->
    @include('layouts.style')
</head>

<body>

    <!-- Start Header Area -->
    @include('layouts.header')
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Product Details Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">product-details</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Single Product Area =================-->
    <div class="product_image_area mb-5">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">
                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{ url('../storage/app/images/products/'.$data[0]->image) }}" alt="">
                        </div>
                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{ url('../storage/app/images/products/'.$data[0]->image) }}" alt="">
                        </div>
                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{ url('../storage/app/images/products/'.$data[0]->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{ $data[0]->name }}</h3>
                        <h2>${{ $data[0]->price }}</h2>
                        <ul class="list">
                            <li><a class="active" href="{{ url('/GetProducts/' . $data[0]->category->id) }}"><span>Category</span> : {{ $data[0]->category->name }}</a></li>
                            <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                        </ul>
                        <p>{{ $data[0]->description }}</p>
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn" href="#">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!-- start footer Area -->
    @include('layouts.footer')
    <!-- End footer Area -->

    @include('layouts.js')

</body>

</html>
