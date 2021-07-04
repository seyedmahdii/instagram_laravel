@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="/uploads/{{ $user->profile->image }}" 
                alt="{{ $user->username }}"
                class="rounded-circle w-100" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline mb-3">
                <div class="d-flex align-items-center">
                    <div class="h4">
                        {{ $user->username }}
                    </div>
                    <div>
                        <div id="follow-wrapper" data-user_id="{{$user->id}}" data-follows="{{ $follows }}" >{{ $follows }}</div>
                    </div>
                </div>
                
                @can('update', $user->profile)
                    <div>
                        <a href="/post/create">New Post</a>
                        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                    </div>
                @endcan
            </div>

            <div class="d-flex">
                <div class="pr-5">
                    <b>{{ $user->posts->count() }}</b> posts
                </div>
                <div class="pr-5">
                    <b>{{ $user->profile->followers->count() }}</b> followers
                </div>
                <div class="pr-5">
                    <b>{{ $user->following->count() }}</b> following
                </div>
            </div>
            
            <div class="mt-3">
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
            </div>

            <div class="font-weight-bold">
                {{ $user->profile->title }}
            </div>

            <div>
                {{ $user->profile->description }}
            </div>

            <div>
                <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @forelse ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{ $post->id }}">
                    <img src="{{ asset("uploads/$post->image") }}" 
                        alt="post"
                        style="height: 300px"
                        class="w-100">
                </a>
            </div>
            @empty
                <p><b>No posts!</b></p>
        @endforelse
    </div>
</div>
@endsection
