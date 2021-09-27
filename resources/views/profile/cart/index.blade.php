<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ url('../resources/img/fav.png') }}">
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
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col" class="text-center">Update</th>
                                <th scope="col" class="text-center">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $value)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img width="100" height="100" src="{{ url('../storage/app/images/products/' . $value->image) }}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{ $value->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{ $value->price }}</h5>
                                </td>
                                <form method="post" action="{{ url('/update/' . $value->id) }}">
                                    @csrf
                                    <td>
                                        <div class="product_count">
                                            <input class="input-text qty" name="quantity" minlength="0" type="number" value="{{ $value->quantity }}">
                                        </div>
                                    </td>
                                    <td>
                                        <h5>${{ $value->totalPrice }}</h5>
                                    </td>
                                    <td class="text-center">
                                        <input type="hidden" name="new_price" value="{{ $value->price }}">
                                        <button type="submit" class="border-0" style="background: none; cursor:pointer;"><img width=" 35" height="35" src="{{ url('../resources/img/update-cart-11-96.png') }}" alt="update"></button>
                                    </td>
                                </form>
                                <td class="text-center">
                                    <form method="post" action="{{ url('/delete/' . $value->id) }}">
                                        @csrf
                                        <button type="submit" class="border-0" style="background: none; cursor:pointer;"><img width="30" height="30" src="{{ url('../resources/img/bin.png') }}" alt="remove"></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="cupon_text d-flex align-items-center">
                        <a class="primary-btn" style="border-radius: 0; margin-left:10px;" href="#">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
    @include('layouts.footer')
    <!-- End footer Area -->
    @include('layouts.js')
</body>

</html>
