@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comment.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="product_id" value="{{ $product_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                @if(Auth::check())
                    <input type="submit" class="btn btn-warning" value="Reply" />
                @endif
            </div>
        </form>
        @include('commerce.partial.comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach
