@extends("layouts.app")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{ asset("uploads/$post->image") }}" alt="{{ $post->user->username }}">
        </div>
        <div class="col-4">
            <header class="post__header">   
                <div>
                    <h3>{{ $post->user->username }}</h3>

                    <p>{{ $post->caption }}</p>
                </div>
            </header>
        </div>
    </div>
</div>
@endsection