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
                <h2 class="header__username">seyedmahdii_</h2>
                <div class="header__btn-container">
                    <a class="btn btn-bordered btn-bordered-default">
                        Edit Profile
                    </a>
                    {{-- <SettingsIcon class="header__settings-btn" /> --}}
                    settings icon
                </div>
            </div>

            <div class="header__follow">
                <div class="header__follow-item">
                    <span class="header__data header__posts">
                        11
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
                <h1 class="header__name">Seyed Mahdi Jalali</h1>
                <span class="header__description">
                    Web developer Forgot to die behind my pc👨‍💻
                    <br />
                    Learned to strengthen my land in my head🛀
                </span>
                <a href="#" class="header__url">
                    seyedmahdijalali.ir
                </a>
            </div>
        </div>
    </div>
</div>

<div class="posts">
    <div class="container posts-container">
        <div class="post">
            <div class="post__wrapper">
                <img src="{{ asset("images/post1.jpg") }}" alt="caption" class="post__image" />
            </div>
        </div>

        <div class="post">
            <div class="post__wrapper">
                <img src="{{ asset("images/post2.jpg") }}" alt="caption" class="post__image" />
            </div>
        </div>

        <div class="post">
            <div class="post__wrapper">
                <img src="{{ asset("images/post3.jpg") }}" alt="caption" class="post__image" />
            </div>
        </div>
    </div>
</div>
@endsection
