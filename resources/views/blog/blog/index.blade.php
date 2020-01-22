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
                                    <a href="{{ route('post', $post->slug) }}"><img src="{{ asset($post->image) }}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{ route('post', $post->slug) }}" class="post-title">
                                        <h5>{{ $post->title }}</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ date('d M Y', strtotime($post->created_at)) }}</a>
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{ $post->author->name }}</a>
                                    </div>
                                    <p class="post-excerpt">{{ str_limit( $post->body, 130, ' ...') }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                {{ $posts->links() }}
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