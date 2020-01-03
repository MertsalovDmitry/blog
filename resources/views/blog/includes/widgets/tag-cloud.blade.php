<!-- ##### Single Widget Area ##### -->
<div class="single-widget-area">
    <!-- Title -->
    <div class="widget-title">
        <h4>Tag Cloud</h4>
    </div>
    <!-- Tags -->
    <ol class="popular-tags d-flex flex-wrap">
        @foreach ($tags as $tag)
            <li><a href="{{ $tag->url }}">{{ $tag->title }}</a></li>
        @endforeach
    </ol>
</div>