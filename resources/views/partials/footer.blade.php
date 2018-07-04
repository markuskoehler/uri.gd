<!-- Footer -->
<section id="footer">
    <hr/>
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-3 col-md-3 offset-sm-1 offset-md-1">
                <h5>{{ __('About') }}</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="{{ route('about-uri-gd') }}">uri.gd</a></li>
                    <li><a href="{{ route('about-markus-koehler') }}">Markus Koehler</a></li>
                    <li><a href="{{ route('about-markus-koehler-it-services') }}">Markus Koehler IT Services</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 text-center my-auto">
                {{--<h5>Statistics</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="">Most Viewed Links</a></li>
                    <li><a href="">Status Monitor</a></li>
                    <li><a href="">Historical Data</a></li>
                </ul>--}}
                <img class="lazy" data-src="{{ asset('img/uri-gd-3.fw.png') }}" alt="uri.gd">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>{{ __('Legal') }}</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="{{ route('legal-notice') }}">{{ __('Legal Notice') }}</a></li>
                    <li><a href="{{ route('disclaimer') }}">{{ __('Disclaimer') }}</a></li>
                    <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a></li>
                </ul>
            </div>
        </div>
        {{--<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>--}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                <p class="h6">uri.gd {{ app(\App\Managers\VersionManager::class)->getVersion('v') }} &copy; 2018, Markus Koehler IT Services. All Rights Reserved.</p>
                {{--<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>--}}
            </div>
            </hr>
        </div>
    </div>
</section>
<!-- ./Footer -->