@extends('layouts.app')

@section('content')
<div class="header">
    <div class="container header-container">
        <div class="header__image-wrapper">
            <img
                src="{{ asset("images/profile.jpg") }}"
                alt="Username here"
                class="header__image"
            />
        </div>

        <div class="header__profile">
            <div class="header__top">
                <h2 class="header__username">{{ $user->username }}</h2>
                <div class="header__btn-container">
                    <a class="btn btn-bordered btn-bordered-default">
                        Edit Profile
                    </a>
                    {{-- <SettingsIcon class="header__settings-btn" /> --}}
                    settings icon
                    <a href="/post/create">New post</a>
                </div>
            </div>

            <div class="header__follow">
                <div class="header__follow-item">
                    <span class="header__data header__posts">
                        {{ $user->posts->count() }}
                    </span>
                    posts
                </div>

                <div class="header__follow-item">
                    <span class="header__data header__followers">
                        216
                    </span>
                    followers
                </div>

                <div class="header__follow-item">
                    <span class="header__data header__following">
                        158
                    </span>
                    following
                </div>
            </div>

            <div class="header__info">
                <h1 class="header__name">{{ $user->profile->title }}</h1>
                <span class="header__description">
                    {{ $user->profile->description }}
                </span>
                <a href={{ $user->profile->url }} class="header__url">
                    {{ $user->profile->url }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="posts">
    <div class="container posts-container">
        @foreach ($user->posts as $post)
            <div class="post">
                <div class="post__wrapper">
                    <a href="/post/{{ $post->id }}">
                        <img src="{{ asset("uploads/$post->image") }}" alt="{{ $post->caption }}" class="post__image" />
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
