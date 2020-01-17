@foreach($comments as $comment)
<!-- Single Comment Area -->
<li class="single_comment_area">
    <div class="comment-wrapper d-flex">
        <!-- Comment Meta -->
        <div class="comment-author">
            <img src="{{ asset($comment->user->image) }}" alt="">
        </div>
        <!-- Comment Content -->
        <div class="comment-content">
            <div class="d-flex align-items-center justify-content-between">
                <h5>{{ $comment->user->name }}</h5>
                <span class="comment-date">{{ date('G:i, d M Y', strtotime($comment->created_at)) }}</span>
            </div>
            <p>{{ $comment->body }}</p>
            <a class="active" href="#">Reply</a>
        </div>
    </div>

    <ol class="children">
        @include('blog.includes.comments.comments', ['comments' => $comment->replies])
    </ol>
</li>
@endforeach