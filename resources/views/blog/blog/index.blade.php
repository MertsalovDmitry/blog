@extends('blog.layouts.default')

@section('content')
    <!-- ##### Blog Area Start ##### -->
    <section class="alazea-blog-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">

                        @if($posts->count())    
                        @foreach ($posts as $post)
                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{ route('single-post', $post->slug) }}"><img src="img/bg-img/6.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{ route('single-post', $post->slug) }}" class="post-title">
                                        <h5>{{ $post->title }}</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ date('d M Y', strtotime($post->created_at)) }}</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{ $post->author->name }}</a>
                                    </div>
                                    <p class="post-excerpt">{{ Str::limit($post->body, 106) }} Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{{ route('single-post') }}"><img src="img/bg-img/6.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h5>Garden designers across the country forecast ideas shaping the gardening world in 2018</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Alan Jackson</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="single-post.html"><img src="img/bg-img/7.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h5>2018 Midwest Tree and Shrub Conference: Resilient Plants for a Lasting Landscape</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Christina Aguilera</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="single-post.html"><img src="img/bg-img/8.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h5>The summer coming up, it’s time for both us and the flowers to soak up the sunshine</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 19 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Mason Jenkins</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="single-post.html"><img src="img/bg-img/6.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h5>Garden designers across the country forecast ideas shaping the gardening world in 2018</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Alan Jackson</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="single-post.html"><img src="img/bg-img/7.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h5>2018 Midwest Tree and Shrub Conference: Resilient Plants for a Lasting Landscape</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 20 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Christina Aguilera</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="single-post.html"><img src="img/bg-img/8.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">
                                        <h5>The summer coming up, it’s time for both us and the flowers to soak up the sunshine</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 19 Jun 2018</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Mason Jenkins</a>
                                    </div>
                                    <p class="post-excerpt">Integer luctus diam ac scerisque consectetur. Vimus ottawas nec lacus sit amet. Aenean interdus mid vitae.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                @include('blog.blog.blog-widget')
                
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->
@stop