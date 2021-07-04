@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/uploads/{{ $post->image }}" alt="post image" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center mb-3">
                    <a href="/profile/{{ $post->user->id }}" class="text-dark">
                        <img src="{{ asset("uploads/".$post->user->profile->image) }}" 
                            alt="profile photo" style="height: 50px; width:50px; border-radius: 50%;">
                    </a>

                    <a href="/profile/{{ $post->user->id }}" class="text-dark">
                        <h3 class="ml-3">{{ $post->user->username }}</h3>
                    </a>

                    <a href="#" class="font-weight-bold ml-3">Follow</a>
                </div>
                
                <h5>
                    <b>
                        {{ $post->caption }}
                    </b>
                </h5>
            </div>
        </div>
    </div>
</div>
@endsection
