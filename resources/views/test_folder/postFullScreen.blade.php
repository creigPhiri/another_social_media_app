{{--
file handles the full screen view of the post when user clicks read more link
--}}

<style>
    @charset "UTF-8";
    * {
        font-family: rounded, sans-serif;
    }

    html {
        background: #223;
    }

    .plx-card {
        transition: all 600ms ease;
        max-width: 1100px;
        display: flex;
        position: relative;
        overflow: hidden;
        margin: 30px 0;
        filter: drop-shadow(0 2px 1rem #112);
        border-radius: 4px;
    }
    .plx-card.bronze {
        overflow: visible;
    }
    @media screen and (max-width: 1000px) and (min-width: 700px) {
        .plx-card.bronze {
            left: 120px;
        }
    }
    @media screen and (min-width: 700px) {
        .plx-card.gold {
            height: 280px;
        }
        .plx-card.silver {
            height: 150px;
            border-radius: 2px;
        }
        .plx-card.bronze {
            height: 80px;
            width: 480px;
            display: inline-flex;
            margin: 30px 50px;
        }
    }
    @media screen and (max-width: 700px) {
        .plx-card {
            height: auto;
            width: auto;
            flex-direction: column;
            border-radius: 2px;
            margin: 25px 15px;
        }
        .plx-card.silver {
            height: 270px;
        }
        .plx-card.silver .flags {
            margin: 0 10px;
        }
        .plx-card.silver .links {
            text-align: right;
            justify-content: flex-end;
        }
        .plx-card.silver .links a {
            font-size: 24px;
            height: 30px;
            margin: -8px 5px 5px 5px;
            padding: 6px 0px 1px 0;
            border-radius: 2px;
            color: #FFFA;
            background: #8855DD;
        }
        .plx-card.silver .links a:hover {
            color: #FFF;
        }
    }

    .pxc-avatar {
        transition: all 600ms ease;
        display: flex;
        flex-direction: column;
        height: auto;
        width: 150px;
        justify-content: space-around;
    }
    .bronze .pxc-avatar img {
        width: 90px;
        height: 90px;
        top: -15px;
        left: -20px;
        position: absolute;
    }
    @media screen and (max-width: 700px) {
        .pxc-avatar {
            width: 100%;
            height: 100px;
            justify-content: space-around;
            align-items: center;
        }
        .silver .pxc-avatar img {
            position: absolute;
            width: 100px;
            height: 100px;
            top: -80px;
            right: 20px;
        }
        .bronze .pxc-avatar {
            height: 130px;
        }
        .bronze .pxc-avatar img {
            top: -105px;
            left: -10px;
            height: 80px;
            width: 80px;
        }
    }
    .pxc-avatar img {
        transition: all 600ms ease;
        width: 150px;
        height: 150px;
        border-radius: 100%;
        box-shadow: 0 1px 1rem rgba(10, 10, 25, 0.5);
        position: relative;
        z-index: 1;
    }
    @media screen and (max-width: 900px) {
        .pxc-avatar img {
            width: 125px;
            height: 125px;
        }
    }
    @media screen and (max-width: 700px) {
        .pxc-avatar img {
            margin-top: 100px;
        }
    }

    .pxc-bg {
        transition: all 600ms ease;
        border-radius: 2px;
        height: 100%;
        width: calc(100% - 75px);
        position: absolute;
        z-index: 0;
        pointer-events: none;
        left: 75px;
        background-size: cover;
        background-position: right;
        background-color: #2b2b95;
    }
    .silver .pxc-bg {
        height: 100%;
        background-size: contain;
    }
    @media screen and (max-width: 700px) {
        .silver .pxc-bg {
            height: 60%;
            top: 30px;
        }
    }
    .bronze .pxc-bg {
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        width: 480px;
        height: 100%;
        max-height: 80px;
        border-radius: 0;
        background-position: 0 -10px;
    }
    @media screen and (max-width: 900px) {
        .pxc-bg {
            left: 50px;
        }
    }
    @media screen and (max-width: 700px) {
        .pxc-bg {
            left: 0;
            top: 0;
            height: 200px;
            width: 100%;
            border-radius: 0;
        }
        .silver .pxc-bg {
            background-position: top right;
        }
    }

    .pxc-subcard {
        transition: all 600ms ease;
        border-radius: 3px;
        background: #1D1D2B;
        width: 650px;
        margin: 25px 200px 25px -25px;
        z-index: 0;
        padding: 15px 25px 15px 40px;
        position: relative;
        display: flex;
        flex-direction: column;
        box-shadow: 0 1px 1rem rgba(10, 10, 25, 0.3);
    }
    @media screen and (min-width: 700px) {
        .silver .pxc-subcard {
            margin: 0 0 0 -75px;
            padding: 15px 25px 15px 90px;
        }
    }
    @media screen and (max-width: 700px) {
        .silver .pxc-subcard {
            padding: 15px;
            margin: 5px;
            flex: 0 1 auto;
        }
    }
    .bronze .pxc-subcard {
        position: absolute;
        bottom: 0;
        margin: 0;
        padding: 15px 10px 10px 70px;
        width: 400px;
        height: auto;
        max-height: 80px;
        border-radius: 0;
    }
    @media screen and (max-width: 900px) {
        .pxc-subcard {
            margin-right: 120px;
            margin-left: -32px;
        }
    }
    @media screen and (max-width: 700px) {
        .pxc-subcard {
            margin: 25px 15px 30px 15px;
            padding: 60px 25px 20px;
            width: auto;
            height: auto;
            flex: 1 0 auto;
        }
        .silver .pxc-subcard {
            padding-top: 20px;
        }
    }

    .pxc-stopper {
        transition: all 600ms ease;
        height: 100%;
        width: calc(60%);
        background: #FFF8;
        display: block;
        position: absolute;
        z-index: 0;
        left: 75px;
    }
    .bronze .pxc-stopper {
        display: none;
    }
    @media screen and (max-width: 900px) {
        .pxc-stopper {
            left: 50px;
        }
    }
    @media screen and (max-width: 700px) {
        .pxc-stopper {
            left: 0;
            width: 100%;
            top: 200px;
            height: calc(100% - 200px);
            background: white;
            border-radius: 0;
        }
        .silver .pxc-stopper {
            height: 50%;
            bottom: 0;
            top: initial;
        }
    }

    .pxc-tags {
        position: absolute;
        bottom: -15px;
        right: 10px;
        height: 32px;
        overflow: hidden;
        text-align: right;
    }
    .silver .pxc-tags, .bronze .pxc-tags {
        display: none;
    }
    .pxc-tags div {
        color: white;
        display: inline-block;
        background: #8855DD;
        border-radius: 12px;
        padding: 2px 10px;
        line-height: 1.7;
        margin: 4px 4px;
        font-size: 12px;
        height: 20px;
    }
    @media screen and (max-width: 700px) {
        .pxc-tags {
            height: 64px;
            text-align: center;
            position: relative;
            width: 100%;
            bottom: 0;
            left: 0;
            margin-bottom: 10px;
        }
        .pxc-tags div {
            color: #8855DD;
            border: solid 1px #8855DD;
            background: transparent;
        }
    }

    .pxc-title {
        font-size: 24px;
        margin-bottom: 4px;
        color: white;
        width: calc(100% - 50px);
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        flex: 0 0 auto;
    }
    .bronze .pxc-title {
        font-size: 18px;
    }
    @media screen and (max-width: 700px) {
        .pxc-title {
            font-size: 16px;
            white-space: initial;
            overflow: initial;
            text-overflow: initial;
        }
    }

    .pxc-sub {
        font-size: 14px;
        margin: 2px 0 8px 0;
        flex: 1 1 auto;
        overflow: hidden;
        -webkit-mask-image: linear-gradient(black 80%, transparent 100%);
        color: #a6aad1;
    }
    .silver .pxc-sub {
        overflow: visible;
    }
    @media screen and (max-width: 700px) {
        .pxc-sub {
            font-size: 13px;
        }
    }

    .pxc-feats {
        font-size: 13px;
        color: #5f5f80;
        flex: 1 1 auto;
        padding-bottom: 5px;
        margin-bottom: 5px;
        line-height: 1.3;
        overflow: hidden;
        -webkit-mask-image: linear-gradient(black 50%, transparent 100%);
    }
    .silver .pxc-feats, .bronze .pxc-feats {
        display: none;
    }
    @media screen and (max-width: 700px) {
        .pxc-feats {
            font-size: 12px;
            margin-top: 10px;
            text-align: center;
        }
    }
    .pxc-feats span:not(:first-child):before {
        content: " • ";
        margin: 3px;
    }

    .bottom-row {
        flex: 0 1 auto;
        margin-top: 10px;
        display: flex;
        justify-items: space-around;
        align-items: center;
    }
    @media screen and (max-width: 700px) {
        .bottom-row {
            border-top: solid 1px rgba(255, 255, 255, 0.05);
            padding-top: 5px;
        }
    }
    .bottom-row .pxc-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .bronze .bottom-row .pxc-info {
        display: none;
    }
    @media screen and (max-width: 700px) {
        .bottom-row .pxc-info {
            position: absolute;
            bottom: -28px;
            left: -10px;
            justify-content: space-between;
            width: 100%;
        }
        .bottom-row .pxc-info .region {
            color: #112;
            font-size: 13px;
            text-transform: uppercase;
        }
    }
    .bottom-row .links {
        display: flex;
        align-content: flex-end;
        flex: 1 0 auto;
        justify-content: flex-end;
    }
    .bottom-row .links a {
        color: #99D;
        font-size: 28px;
        text-align: center;
        width: 48px;
        height: 48px;
        display: inline-block;
        margin: 0 10px;
        cursor: pointer;
    }
    .bronze .bottom-row .links a {
        display: none;
    }
    .bottom-row .links a:hover {
        color: #EEF;
    }
    @media screen and (max-width: 700px) {
        .bottom-row .links {
            justify-content: center;
            margin-top: 10px;
            margin-bottom: -10px;
        }
        .bottom-row .links a {
            color: #a6aad1;
        }
    }
    .bottom-row .flags {
        overflow: hidden;
        height: 23px;
    }
    .bottom-row .flags span {
        margin: 2px 6px;
        background: white;
        border-radius: 3px;
        width: 24px;
        height: 16px;
        display: inline-block;
    }
    .bottom-row .region {
        color: white;
        margin-left: 8px;
    }

    .bronze .discordLink {
        display: flex !important;
        position: absolute;
        left: -5px;
        bottom: 5px;
        justify-content: space-around;
        align-items: center;
    }

</style>

@extends("layouts.master")
@section("content")
    {{--<div class="container" style=" height: 100%">--}}
        @include('layouts.nav')
        {{--<div class="jumbotron text-white pt-2 text-center pb-0 rounded-0 shadow-none" style="background-color: #1F2030">--}}
            {{--<img src="https://via.placeholder.com/1000x200.png?text=image+missing" class="img-fluid h-50" alt="">--}}
            {{--<h1 class="display-5 mt-1 text-center" style="font-family: Oswald">{{$post->post_title}}</h1>--}}
            {{--<div class="mx-auto m-3 d-block primary_color_bg" style="padding-bottom: 0.05rem; width: 20%"></div>--}}
            {{--<p class="lead">{{$post->post_body}}</p>--}}
            {{--<p class="font-italic">{{'by '.$post->users->name}}</p>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--@include("input_cards.comment_form")--}}
        {{--</div>--}}
        {{--<section >--}}
            {{--@foreach($post->comments as $comment)--}}
            {{--@include("display_cards.comment_card")--}}
            {{--@endforeach--}}
        {{--</section>--}}


    <div class="plx-card gold">
        <div class="pxc-bg" style="background-image:url('https://images.freeimages.com/images/small-previews/335/vale-da-lua-2-1401161.jpg');">  </div>
        <div class="pxc-avatar p-1"><img src="https://cdn.umnbootcamp.com/wp-content/uploads/sites/60/2018/03/placeholder-person.png"/></div>
        <div class="pxc-stopper">   </div>
        <div class="pxc-subcard">
            <div class="pxc-title">{{$post->post_title}}</div>
            <div class="pxc-sub"> {{$post->post_body}} </div>
            {{--<div class="pxc-feats"><span>Feat One</span><span> Feat Two</span><span> Feat One Hundred and Seventy Three</span><span> Feat Forty Five</span><span>Feat Feat One</span><span> Feat Two</span><span> Feat One Hundred and Seventy Three</span><span> Feat Forty Five</span><span>Feat Feat One</span><span> Feat Two</span><span> Feat One Hundred and Seventy Three</span><span> Feat Forty Five</span><span>Feat Feat One</span><span> Feat Two</span><span> Feat One Hundred and Seventy Three</span><span> Feat Forty Five</span><span>Feat </span>--}}
            {{--</div>--}}
            <div class="bottom-row">
                <div class="pxc-info">
                    {{--<div class="flags"><span><img src="http://pollux.fun/images/flags/EN.png"/></span><span><img src="http://pollux.fun/images/flags/BR.png"/></span><span><img src="http://pollux.fun/images/flags/FR.png"/></span><span><img src="http://pollux.fun/images/flags/TR.png"/></span><span><img src="http://pollux.fun/images/flags/JP.png"/></span>--}}
                    {{--</div>--}}
                    <div class="region">{{$post->users->name}}</div>
                </div>
                {{--<div class="links"><a class="site" uk-tooltip="WEBSITE"><i class="fas fa-globe-americas"> </i></a><a class="link discordLink" uk-tooltip="DISCORD SERVER"><i class="fab fa-discord"></i></a><a class="shop" uk-tooltip="EXCLUSIVE POLLUX SHOP"><i class="fas fa-shopping-bag"> </i></a></div>--}}
            </div>
        </div>
    </div>
    <div>
        @include("input_cards.comment_form")
    </div>
    <section >
        @foreach($post->comments as $comment)
            @include("display_cards.comment_card")
        @endforeach
    </section>
    {{--</div>--}}
@endsection