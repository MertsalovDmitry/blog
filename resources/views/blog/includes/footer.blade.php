<!-- ##### Footer Area Start ##### -->
<footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="footer-logo mb-30">
                            <a href="{{ route('home') }}">RDMITRY</a>
                        </div>
                        <p>My social</p>
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>QUICK LINK</h5>
                        </div>
                        <nav class="widget-nav">
                            <ul>
                                <li><a href="#">Purchase</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Payment</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Return</a></li>
                                <li><a href="#">Advertise</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Orders</a></li>
                                <li><a href="#">Policities</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>BEST SELLER</h5>
                        </div>

                        <!-- Single Best Seller Products -->
                        <div class="single-best-seller-product d-flex align-items-center">
                            <div class="product-thumbnail">
                                <a href="shop-details.html"><img src="{{ asset('img/bg-img/4.jpg') }}" alt=""></a>
                            </div>
                            <div class="product-info">
                                <a href="shop-details.html">Cactus Flower</a>
                                <p>$10.99</p>
                            </div>
                        </div>

                        <!-- Single Best Seller Products -->
                        <div class="single-best-seller-product d-flex align-items-center">
                            <div class="product-thumbnail">
                                <a href="shop-details.html"><img src="{{ asset('img/bg-img/5.jpg') }}" alt=""></a>
                            </div>
                            <div class="product-info">
                                <a href="shop-details.html">Tulip Flower</a>
                                <p>$11.99</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>CONTACTS</h5>
                        </div>

                        @include('blog.includes.contact-list')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
                <!-- Copywrite Text -->
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                        <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
                <!-- Footer Nav -->
                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>                                                               
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

@include('blog.includes.scripts')