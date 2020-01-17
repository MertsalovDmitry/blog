<!-- Leave A Comment -->
<div class="leave-comment-area clearfix">
    <div class="comment-form">
        <h4 class="headline">Leave A Comment</h4>
            <div class="contact-form-area">
            
            @if (Auth::check())
            <!-- Comment Form -->
            <form  method="post" action="{{ route('comment.add') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="comment_body" id="comment_body" cols="30" rows="10" placeholder="Comment"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn alazea-btn">Add Comment</button>
                    </div>
                </div>
            </form>       
            @else
                <div class="row">
                    <p>Чтобы оставить комментарий, войдите в систему</p>
                </div>
            @endif

        </div>
    </div>
</div>