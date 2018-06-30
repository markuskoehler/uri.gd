@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redirecting you to {{ $title }}</div>

                    <div class="card-body">
                        <strong>Disclaimer</strong>: You are now leaving the uri.gd website and are going to a website that is not operated by uri.gd. We are not responsible for the content or availability of linked sites.<br><br>
                        You will be redirected to <strong>{{ $title }}</strong> in <span id="time">15</span> seconds. Please <a href="{{ $link }}">click here</a> if the redirect does not work.<br><br>
                        <h3>About Third Party Links On Our Site</h3>
                        uri.gd offers links to other third party websites that may be of interest to our website visitors. The links provided in our website are provided solely for your convenience and may assist you in locating other useful information on the Internet. When you click on these links you will leave the uri.gd website and will be redirected to another site. These sites are not under the control of uri.gd.<br><br>

                        uri.gd is not responsible for the content of linked third party websites. We are not an agent for these third parties nor do we endorse or guarantee their products. We make no representation or warranty regarding the accuracy of the information contained in the linked sites. We suggest that you always verify the information obtained from linked websites before acting upon this information.<br><br>

                        Also, please be aware that the security and privacy policies on these sites may be different than uri.gd policies, so please read third party privacy and security policies closely.<br><br>

                        If you have any questions or concerns about the products and services offered on linked third party websites, please contact the third party directly.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('foot')
    <script>
        var count=15;

        var counter=setInterval(timer, 1000); // 1000 will  run it every 1 second

        function timer()
        {
            count=count-1;
            if (count <= 0)
            {
                clearInterval(counter);

                window.location='{{ $link }}';

                return;
            }

            document.getElementById("time").innerHTML=count;
        }
    </script>
@endpush