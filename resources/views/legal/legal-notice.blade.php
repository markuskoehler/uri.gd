@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class='impressum'><h4>{{ __('Legal Notice') }}</h4>
                    <p><strong>{{ __('Information according to') }} § 5 TMG{{ __(' (German Teleservices Act):') }}</strong><br>
                        Markus Koehler IT Services<br>
                        Markus Köhler <br>
                        Villastraße 13<br>
                        67317 Altleiningen <br>
                    </p>
                    <p><strong>{{ __('Contact Information') }}:</strong><br>
                        {{ __('Telephone') }}: <a href='tel:004915129130854'>0151-29130854</a><br>
                        E-Mail: <a href='mailto:office@koehler.pro'>office (at) koehler.pro</a><br></p>
                    <p><strong>{{ __('VAT ID') }}:</strong> <br>
                        {{ __('VAT ID according to § 27a German Value Added Tax Act') }}: DE286464504<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
