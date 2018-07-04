@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">

                <h4>{{ __('Disclaimer') }}</h4>
                <p><strong>{{ __('Liability For Content') }}</strong><br><br>
                {{ __('The information contained in this website is for general information purposes only. The information is provided by Markus Koehler IT Services and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk. In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website. Every effort is made to keep the website up and running smoothly. However, Markus Koehler IT Services takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.') }}
                <br><br><strong>{{ __('Liability For Links') }}</strong><br><br>
                {{ __('Through this website you are able to link to other websites which are not under the control of Markus Koehler IT Services. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.') }}
                <br><br><strong>{{ __('Copyright') }}</strong><br><br>
                {{ __('The content created by Markus Koehler IT Services underlies the German Copyright legislation. Any use of this this content outside of the boundaries of this legislation needs the explicitly written approval from Markus Koehler IT Services. Downloads and copies of this website are only allowed for personal use, not for commercial use. Any contents created by others than Markus Koehler IT Services are owned by their respective creators. Should you notice a violation of copyrights on this site, please notice us immediately so we can remove those contents from the site.') }}
                </p>
            </div>
        </div>
    </div>
@endsection
