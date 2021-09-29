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

    <!-- CSS ============================================= -->
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
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================ Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <form method="post" action="{{ url('/confirm') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Billing Details</h3>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder='Phone Number'" required>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="country" name="country" placeholder="Country" onfocus="this.placeholder = ''" onblur="this.placeholder='Country'" required>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder='City'" required>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder='Address'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="postCode" placeholder="Postcode/ZIP" onfocus="this.placeholder = ''" onblur="this.placeholder='Postcode/ZIP'" required>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="order_box">
                                <h2>Your Order</h2>
                                <ul class="list">
                                    <li><a href="#">Product <span>Total</span></a></li>
                                    @foreach($data as $value)
                                    <li><a href="#">{{ $value->name }} <span class="middle">x 0{{ $value->quantity }}</span> <span class="last">${{ $value->totalPrice }}</span></a></li>
                                    @endforeach
                                </ul>
                                <ul class="list list_2">
                                    <li><a href="#">Subtotal <span>${{ $cost }}</span></a></li>
                                    <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                                    <li><a href="#">Total <span>${{ $cost + 50 }}</span></a></li>
                                </ul>
                                <button class="primary-btn" type="submit">Confirm Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--================ End Checkout Area =================-->

    <!-- start footer Area -->
    @include('layouts.footer')
    <!-- End footer Area -->


    @include('layouts.js')
</body>

</html>
