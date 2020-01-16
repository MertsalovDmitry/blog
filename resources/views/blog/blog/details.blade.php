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
                        @if($post)
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title">{{ $post->title }}</h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ date('d M Y', strtotime($post->created_at)) }}</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i>{{ $post->author->name }}</a>
                                </div>
                                <div class="post-thumbnail mb-30">
                                    <img src="{{ asset($post->image) }}" alt="">
                                </div>
                                {!! $post->body !!}
                            </div>
                        </div>
                        @endif

                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex justify-content-between align-items-center">
                            <!-- Tags -->
                            <ol class="popular-tags d-flex align-items-center flex-wrap">
                                <li><span>Tag:</span></li>
                                @if($post)
                                    @foreach($post->tags as $tag)
                                        <li><a href="{{ $tag->title }}">{{ $tag->title }}</a></li>
                                    @endforeach
                                @endif
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
                        @if (isset($post->comments))
                        <div class="comment_area clearfix">
                            <h4 class="headline">{{ $post->comments->count() }} Comments</h4>
                                <ol>
                                    @include('blog.includes.comments.comments', ['comments' => $post->comments, 'post_id' => $post->id])
                                </ol>
                        </div>
                        @endif                       

                        @include('blog.includes.comments.comment-form')
    
                    </div>
                </div>

                @include('blog.blog.blog-details-widget')
                
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

@stop