<!-- Leave A Comment -->
<div class="leave-comment-area clearfix">
    <div class="comment-form">
        <h4 class="headline">Leave A Comment</h4>
            <div class="contact-form-area">
            
            @if (Auth::check())
            <!-- Comment Form -->
            <form action="#" method="post">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="contact-name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="contact-email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Comment"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn alazea-btn">Post Comment</button>
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