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
            <!-- <a class="active" href="#">Reply</a> -->

            @if (Auth::check())
            <!-- Comment Form -->
            <form  method="post" action="{{ route('reply.add') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="comment_body" cols="30" rows="1" placeholder="Comment"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn alazea-btn">Reply</button>
                    </div>
                </div>
            </form>
            @endif

        </div>
    </div>

    <ol class="children">
        @include('blog.includes.comments.comments', ['comments' => $comment->replies])
    </ol>
</li>
@endforeach