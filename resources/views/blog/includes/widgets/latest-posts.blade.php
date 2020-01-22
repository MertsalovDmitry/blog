<!-- ##### Single Widget Area ##### -->
<div class="single-widget-area">
    <!-- Title -->
    <div class="widget-title">
        <h4>Recent post</h4>
    </div>

    @foreach($recent as $post)
    <!-- Single Latest Posts -->
    <div class="single-latest-post d-flex align-items-center">
        <div class="post-thumb">
            <img src="{{ asset($post->image) }}" alt="">
        </div>
        <div class="post-content">
            <a href="#" class="post-title">
                <h6>{{ $post->title }}</h6>
            </a>
            <a href="#" class="post-date">{{ date('d M Y', strtotime($post->created_at)) }}</a>
        </div>
    </div>
    @endforeach
    
</div>