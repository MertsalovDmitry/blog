@extends('blog.layouts.default')

@section('content')

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title">Garden designers across the country forecast ideas shaping the gardening world in 2018</h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 19 Jun 2018</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Mason Jenkins</a>
                                </div>
                                <div class="post-thumbnail mb-30">
                                    <img src="{{ asset('img/bg-img/35.jpg') }}" alt="">
                                </div>
                                <p>Integer luctus diam ac scerisque consectetur. Vimus ottawas euismod nec lacus sit amet. Aenean interdus midu vitae, uttah mattis augue fermentum. Donec auctor massa orci, quis condimentum odio eleifended. Orci varius natoque penatibuset magnis discount parturient montes, nascetur ridiculus mus. Ut felis lectus, sagittis in turpis sit amet, ornare interdu ligula. Proin sed dolor eu nulla fermentum fermentum. Suspendisse eget mollis diam. Nulla non mauris et eros accumsan imperdit sed ut turpis. Ut aliquam et sapien at convallis. Integer eu porttitor lacus. Curabitur id aliquam mauris.</p>
                                <div class="row mb-30">
                                    <div class="col-lg-7">
                                        <p>Nullam lectus elit, volutpat velo justo sit damet, tincidunt dapibus turpis. Vivamus idelit nec enim tristique blandit in sit down metunc. Maecenas accumsan nunc quis nisl porttitor varius sed luctus ligula. Aeneamana pellentesque enim eu magna vehicula suada.</p>
                                        <p>Quisque suscipit elit sit ametz pellentesque scelerisque. Integer actioner cursu quam, estina portitor cant. Vestibulum luctus libero urna gamora scelerisque laoret. Quisque nect facilisis neque. Integer vitaer dapibus purus, fames turpis egestas. Nullam vulputa nisl tempus luctus.</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="{{ asset('img/bg-img/36.jpg') }}" alt="">
                                    </div>
                                </div>
                                <p>Mauris nisi arcu, consectetur convallis fringilla quis, posuere ac mauris. Ut in placerat lorem. Donec cursus malesuada nibhem, eget consectetur posuere sed. Suspendisse auctor nec diamet consectetur. Etiam ac maurised nisib tincidunt viverra. Sed nulla lacus, convallis vel nunc sed, fringilla venenatis neque.</p>
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h5>“If every plant and flower were found in all places, the charm of locality would not exist. Everything varies, and that gives the interest.”</h5>
                                        <h5>Richard Jefferies</h5>
                                    </div>
                                </blockquote>
                                <h4>Plant the love of the holy ones within your spirit.</h4>
                                <p>Phasellus laoreet mattis ultrices. Integer ex sem, ultrices eu sem in, laoreet vehicula ligula. Phasellus quistor blandit salah convallis augue. Sed velot dictum sapient. In pulvinar libero turpis. Quisque facilisis bigbang consenti. Nullam bendumaz, massan consequat in gravida porttitor, aguet lacus condimentum mauris, id blandit quam augue eget mana. Etiam denim jeans lacus, nascetur auge bibendum vel pulvinar viverra, mattis sit amet mi. Mauris fringilla, ex vitae maximus fringilla, neque sapien maximus justo, cursus risus neque sed nibh. Donec at urna eros scelerisque non nibh sed.</p>
                                <p>Cras porta tortor quis eros volutpat, at vehicula lectus posuere. Sed faucibus euismod nibh, necta auctor nunclear elementum non. Aliquam ut nulla efficitur tortor vestibulum pharetra inget nisl. Suspendisse eleifenden metus, vitae viverra dante volutpat quisto. Curabitur tator risus, sagittis a imperdiet sed, volutpat sit amet. Integer gravida leo sit amet pulvinar vehicula.</p>
                            </div>
                        </div>

                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex justify-content-between align-items-center">
                            <!-- Tags -->
                            <ol class="popular-tags d-flex align-items-center flex-wrap">
                                <li><span>Tag:</span></li>
                                <li><a href="#">PLANTS</a></li>
                                <li><a href="#">CACTUS</a></li>
                            </ol>
                            <!-- Share -->
                            <div class="post-share">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h4 class="headline">2 Comments</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="{{ asset('img/bg-img/37.jpg') }}" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Simona Halep</h5>
                                                <span class="comment-date">09:00 AM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <div class="comment-wrapper d-flex">
                                                <!-- Comment Meta -->
                                                <div class="comment-author">
                                                    <img src="{{ asset('img/bg-img/38.jpg') }}" alt="">
                                                </div>
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Rafael Nadal</h5>
                                                        <span class="comment-date">09:30 AM,  20 Jun 2018</span>
                                                    </div>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                    <a class="active" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="{{ asset('img/bg-img/39.jpg') }}" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Maria Sharapova</h5>
                                                <span class="comment-date">02:20 PM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        @include('blog.includes.comments.comment-form')
    
                    </div>
                </div>

                @include('blog.blog.blog-details-widget')
                
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

@stop