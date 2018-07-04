@extends('layouts.app')

@push('head')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            /*
            100vh = full height
            55px = nav height
            3rem = main padding
            ...
            1.5rem = padding cookie consent
            1rem = nav padding
             */
            height: calc(
                    100vh -
                    55px -
                    3rem -
                    30px -
                    1.5rem -
                    1rem -
                    6.5rem -
                    5px
            );
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .links {
            margin-top: 50px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .searchbox {
            margin: 0 1em;
        }
    </style>
@endpush

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="m-b-md">
                <img class="lazy" data-src="{{ asset('img/uri-gd-3.fw.png') }}" alt="uri.gd"><br>
                <span class="subtitle">{{ __('The open source URL shortener') }}</span>
            </div>

            <div class="searchbox">
                {{ bs()->openForm('post', url()->route('goto')) }}
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="slug" placeholder="{{ __('Link Slug') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                {{ bs()->closeForm() }}
            </div>

            <div class="links">
                <a href="https://koehler.wiki/x/IwAyAQ" target="_blank">{{ __('Documentation') }}</a>
                <a href="https://github.com/markuskoehler/uri.gd" target="_blank">{{ __('GitHub') }}</a>
                {{--<a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>--}}<br><br>

                @include('donate.button')
            </div>
        </div>
    </div>
@endsection
