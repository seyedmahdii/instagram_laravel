@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <div class="d-flex align-items-center mb-3">
                    <a href="/profile/{{ $post->user->id }}" class="text-dark">
                        <img src="{{ asset("uploads/".$post->user->profile->image) }}" 
                            alt="profile photo" style="height: 45px; width:45px; border-radius: 50%;">
                    </a>

                    <a href="/profile/{{ $post->user->id }}" class="text-dark">
                        <h3 class="ml-3">{{ $post->user->username }}</h3>
                    </a>

                    <a href="#" class="font-weight-bold ml-3">Follow</a>
                </div>

                <a href="/post/{{ $post->id }}">
                    <img src="/uploads/{{ $post->image }}" alt="post image" class="w-100">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
                <div>
                    
                    <h5>
                        <b>
                            <a href="/post/{{ $post->id }}">
                                {{ $post->caption }}
                            </a>
                        </b>
                    </h5>
                    <p>
                        {{ $post->description }}
                    </p>
                </div>
            </div>
        </div>
        <hr>
    @empty
        <p>
            <b>
                There's no posts
            </b>
        </p>
    @endforelse
</div>
@endsection
