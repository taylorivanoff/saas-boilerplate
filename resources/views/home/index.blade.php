@extends('layouts.public')

@section('content')
    <div class="row" style="margin: 11rem 0">
        <div class="col-md-6">
            <div class="row">
                <h1>{{ config('app.name') }} helps you do things better.</h1>
            </div>
            <div class="row">
                <form action="{{ route('home.signup') }}" method="post" class="form">
                    {{ csrf_field() }}
                    <div class="input-group my-4">
                        <input type="text" class="form-control" style="width: 250px" placeholder="Enter your email" aria-label="Enter your email" name="email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Sign Up</button>
                        </div>
                    </div>
                </form>
                <p class="text-center text-secondary">Get started for free. No credit card required.</p>
            </div>
        </div>
        <div class="col-md-6">
                <svg class="w-100" id="bdc9873c-1fd3-471e-a0c2-9fe0be805663" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="990.16984" height="637.66844" viewBox="0 0 990.16984 637.66844"><title>problem solving</title><path d="M931.44288,767.96818q.98816-.87195,1.93353-1.78918c7.42063-7.20864,20.72823-22.19781,27.034-29.37529a4.7534,4.7534,0,0,0-.85277-7.03654l-12.24678-8.551c.47336-.23884.73762-.37387.73762-.37387l-8.78768-12.70916c.97145-19.416-40.36157-72.25318-50.70537-80.15391s24.27107-70.30813,24.27107-70.30813c5.26339-2.0374,9.51939-6.3645,12.77823-10.9513.19879.03553.396.07395.59783.10289l4.42951-.40824a7.87041,7.87041,0,0,0,7.1285-7.22812,141.25673,141.25673,0,0,0,.4915-15.71555c.90205-2.71794.92106-7.62537,6.82409-11.51875,7.71832-5.09081,57.28984-132.47329,34.48137-155.79078,0,0-9.71692-14.52752-15.21219-16.30592,0,0,.86982-4.25416-2.39721-6.167l-1.58207-4.986s-2.12376.93671-5.28608,2.40566a91.472,91.472,0,0,1-6.61438-11.41582c1.09639-4.76,17.54709-25.72992,2.79255-40.228-14.96992-14.70987-22.36387-24.6913-33.51677-20.71207s-37.35827,9.91705-36.59119,19.27164c.76685,9.35451-1.94079,13.03143,2.88771,16.8706,4.82835,3.83919,4.99638,3.52219,4.99638,3.52219l.00045-.00062a28.87076,28.87076,0,0,0,32.63937,35.64729,80.367,80.367,0,0,1,5.512,13.38911,13.33894,13.33894,0,0,0-1.32974,8.54687A221.70357,221.70357,0,0,0,912.175,379.12764c-3.27093,6.31152-9.32186,19.677-15.952,33.91835-11.64539-3.75589-22.17535-7.55528-22.17535-7.55528s-.61027.71936-1.569,1.90044a67.11276,67.11276,0,0,0-9.977-.93812l-28.11384-28.312a2.32617,2.32617,0,0,0-3.07981-.38411l-24.70724,11.71048a2.95543,2.95543,0,0,0-.06046,4.281l24.47891,25.98748c-1.921,2.06116,1.34869,4.58041,6.63029,7.03889l6.4308,6.82711a2.28533,2.28533,0,0,0,3.50207.09152l2.17934-2.29663c3.97757,1.30982,7.91747,2.47,11.10241,3.363-.23361,1.14527-.06839,1.98588.67443,2.34919,1.34764.65912,8.50387,4.63965,18.26722,9.61531-3.90867,7.36315-7.3048,12.9784-9.60177,15.196-7.03309,6.79056-6.86339,25.52775-6.50307,32.87759-2.24242,3.35936-5.38206,8.50835-5.31229,10.90583-12.3977,18.46466-34.443,53.284-37.85611,72.18381,0,0-16.02376,21.37451-18.28894,49.47823s-30.92023,93.19879-32.73865,94.128c-.27613.1412-.23312.72113.10645,1.57525-9.46794,3.27569,15.1437,45.09752,20.15438,43.68362,4.35523-1.22891,10.93675-23.51212,10.92711-30.35889.15131-.039.29811-.0664.45036-.1079,0,0,6.02225-16.26375,10.56837-18.58684s27.888-74.44964,27.78793-85.865c-.01535-1.75131,1.50077-4.6913,4.07069-8.40772a31.47881,31.47881,0,0,0,12.45537,18.30911c33.07218,22.08589,55.59391,90.8423,59.71537,92.1761a2.45843,2.45843,0,0,0,.73423.07666c.35075,9.80613.15705,28.39993-6.17171,30.79475a13.221,13.221,0,0,0-5.00518,3.348" transform="translate(-104.91508 -130.9659)" fill="#f2f2f2"/><path d="M1072.0891,624.80788a19.15171,19.15171,0,0,0-20.07468,1.66117c-8.59036,6.54289-9.8994,19.34579-6.66911,29.64962s9.99169,19.05753,15.28516,28.46938c7.11,12.64168,11.689,27.10727,10.50865,41.5631s-8.76538,28.79439-21.41487,35.89049c-11.74089,6.5864-25.96419,6.33477-39.4195,5.906" transform="translate(-104.91508 -130.9659)" fill="none" stroke="#f2f2f2" stroke-miterlimit="10"/><ellipse cx="1080.73765" cy="630.85324" rx="7.08333" ry="14.58333" transform="translate(-113.36921 1116.02934) rotate(-59.76946)" fill="#f2f2f2"/><ellipse cx="1067.32196" cy="677.04749" rx="7.08333" ry="14.58333" transform="translate(-159.94249 1127.37443) rotate(-59.76946)" fill="#f2f2f2"/><ellipse cx="1040.50568" cy="670.10139" rx="7.08333" ry="14.58333" transform="translate(-167.25581 1100.75612) rotate(-59.76946)" fill="#f2f2f2"/><ellipse cx="1056.7863" cy="724.92" rx="7.08333" ry="14.58333" transform="translate(-206.53581 1142.04118) rotate(-59.76946)" fill="#f2f2f2"/><ellipse cx="1081.98649" cy="739.60485" rx="7.08333" ry="14.58333" transform="translate(-206.71124 1171.10562) rotate(-59.76946)" fill="#f2f2f2"/><path d="M991.48229,613.27991A19.15171,19.15171,0,0,0,974.974,624.82239c-4.12791,9.97818,1.18708,21.699,9.16586,28.97523s18.228,11.4352,27.54026,16.90195c12.50793,7.34274,23.74733,17.53568,30.00575,30.61988s6.92407,29.29174-.43242,41.79159c-6.82809,11.602-19.2438,18.54575-31.08516,24.94975" transform="translate(-104.91508 -130.9659)" fill="none" stroke="#3f3d56" stroke-miterlimit="10"/><ellipse cx="897.08333" cy="483.18287" rx="14.58333" ry="7.08333" fill="#3997ff"/><ellipse cx="908.75" cy="529.84954" rx="14.58333" ry="7.08333" fill="#3997ff"/><ellipse cx="882.08333" cy="537.34954" rx="14.58333" ry="7.08333" fill="#3997ff"/><ellipse cx="923.75" cy="576.5162" rx="14.58333" ry="7.08333" fill="#3997ff"/><ellipse cx="952.91667" cy="576.5162" rx="14.58333" ry="7.08333" fill="#3997ff"/><line x1="555.5" y1="637" x2="967.5" y2="637" fill="none" stroke="#3f3d56" stroke-miterlimit="10"/><path d="M762.10648,417.55612s-45.825,7.24058-40.19318-1.89644,35.61959-18.26615,41.1194-16.35955S762.10648,417.55612,762.10648,417.55612Z" transform="translate(-104.91508 -130.9659)" fill="#ffc1c7"/><path d="M762.10648,417.55612s-45.825,7.24058-40.19318-1.89644,35.61959-18.26615,41.1194-16.35955S762.10648,417.55612,762.10648,417.55612Z" transform="translate(-104.91508 -130.9659)" opacity="0.1"/><path d="M814.66005,315.382s-29.60182,7.942-15.88391,33.2118c0,0,22.38187,44.04174,12.99593,46.92972s-52.70569,1.444-52.70569,1.444-10.10793,24.54785-5.054,25.26985,85.91747,17.32789,94.58142,1.444,0-84.47349,0-84.47349S836.31992,305.27409,814.66005,315.382Z" transform="translate(-104.91508 -130.9659)" fill="#3997ff"/><path d="M814.66005,315.382s-29.60182,7.942-15.88391,33.2118c0,0,22.38187,44.04174,12.99593,46.92972s-52.70569,1.444-52.70569,1.444-10.10793,24.54785-5.054,25.26985,85.91747,17.32789,94.58142,1.444,0-84.47349,0-84.47349S836.31992,305.27409,814.66005,315.382Z" transform="translate(-104.91508 -130.9659)" opacity="0.1"/><path d="M898.41154,690.81975s12.99592,31.04581,5.776,36.82178-5.776,16.6059-.722,16.6059,16.6059-10.10794,23.10386-22.38187c4.84056-9.14328,12.88638-27.50167,16.67586-36.272a4.75347,4.75347,0,0,0-2.97795-6.43217l-20.91787-6.39157Z" transform="translate(-104.91508 -130.9659)" fill="#3f3d56"/><path d="M761.23237,728.36352s-27.43583,22.38187-41.87574,21.65987-16.6059,14.43991,0,16.6059,66.42359,2.888,70.75557,0,2.888-33.2118,0-33.93379S761.23237,728.36352,761.23237,728.36352Z" transform="translate(-104.91508 -130.9659)" fill="#3f3d56"/><path d="M854.36981,498.04692s0,22.38186-11.55193,31.76781c0,0-13.71792,70.03357-1.444,74.36555s67.86758,41.87574,72.92155,60.64763l12.27393,9.38594s-22.38186,22.38187-26.71384,22.38187-46.92971-58.48165-85.19548-69.31158c0,0-23.82586-5.776-23.10386-36.82178S820.436,477.10905,820.436,477.10905h32.48981Z" transform="translate(-104.91508 -130.9659)" fill="#2f2e41"/><path d="M854.36981,498.04692s0,22.38186-11.55193,31.76781c0,0-13.71792,70.03357-1.444,74.36555s67.86758,41.87574,72.92155,60.64763l12.27393,9.38594s-22.38186,22.38187-26.71384,22.38187-46.92971-58.48165-85.19548-69.31158c0,0-23.82586-5.776-23.10386-36.82178S820.436,477.10905,820.436,477.10905h32.48981Z" transform="translate(-104.91508 -130.9659)" opacity="0.1"/><path d="M779.28226,482.885s-21.65987,67.86759-18.04989,94.58143c0,0-8.66395,25.26984-2.166,52.70568s-.722,98.1914-2.166,99.63539,15.8839,16.6059,34.65579,4.332c0,0,.722-17.3279,4.332-20.93788s3.61-79.41951,0-90.24945,38.98777-89.52746,38.98777-89.52746,23.10386-20.93787,14.43991-31.7678.722-32.48981.722-32.48981l-65.7016,4.332Z" transform="translate(-104.91508 -130.9659)" fill="#2f2e41"/><circle cx="664.25924" cy="157.70229" r="28.87983" fill="#ffc1c7"/><path d="M787.94621,275.67227S811.05007,302.3861,816.826,303.1081s-18.77188,31.76781-18.77188,31.76781-13.71792-23.10386-23.10386-25.26985S787.94621,275.67227,787.94621,275.67227Z" transform="translate(-104.91508 -130.9659)" fill="#ffc1c7"/><path d="M821.158,302.3861l-3.61-5.054s-24.87578,22.17617-25.79481,28.055a12.73562,12.73562,0,0,0,1.96895,9.48879l14.43992-6.498L815.382,313.938Z" transform="translate(-104.91508 -130.9659)" fill="#3f3d56"/><path d="M777.83827,481.441s-5.776,17.32789-1.444,16.6059,4.332-10.10794,9.38594-10.10794,7.942-7.942,7.942-7.942Z" transform="translate(-104.91508 -130.9659)" fill="#3f3d56"/><path d="M814.66005,482.885s16.6059,36.09978,37.54377,32.4898l4.08858-1.75225a7.87051,7.87051,0,0,0,4.55678-9.07186c-1.995-8.31546-5.66252-21.66569-8.64536-21.66569Z" transform="translate(-104.91508 -130.9659)" fill="#3f3d56"/><path d="M740.35661,290.48081s2.82587-9.03258,12.21181-5.4226,17.3279,11.55193,19.49389,5.776,7.70886-11.08952,11.43538-6.62775,20.69342,12.76472,19.97143,8.43274,9.02494-29.96282-9.74695-39.34876-28.87982-16.6059-38.26576-9.38594-32.48981,20.93787-28.87983,29.60182,2.166,12.99592,7.942,15.16191S740.35661,290.48081,740.35661,290.48081Z" transform="translate(-104.91508 -130.9659)" fill="#2f2e41"/><path d="M824.768,306.71808s-.722-6.498-7.22-5.054-23.82586,30.32381-23.82586,30.32381a204.24341,204.24341,0,0,0-6.498,28.15783c-2.888,17.3279-8.66394,80.86351-14.43991,91.69345s5.054,36.09978,5.054,36.09978,6.498-7.22,27.43583-2.888,48.37371,8.66394,50.5397,6.498-2.166-7.942,3.61-15.16191,13.71791-143.67713-15.16191-158.839C844.26187,317.548,830.544,306.71808,824.768,306.71808Z" transform="translate(-104.91508 -130.9659)" fill="#3997ff"/><path d="M817.548,328.378s-29.60182,7.942-15.8839,33.21179c0,0,22.38186,44.04174,12.99592,46.92972s-52.70568,1.444-52.70568,1.444-4.693,15.52291.361,16.2449,80.50252,26.35284,89.16646,10.46894,0-84.47349,0-84.47349S839.2079,318.27,817.548,328.378Z" transform="translate(-104.91508 -130.9659)" opacity="0.1"/><path d="M691.22324,406.58134,739.21038,432.94a2.28533,2.28533,0,0,0,3.36012-.9912l11.75542-24.5717a3.0672,3.0672,0,0,0-1.57216-3.6833l-39.84138-20.536a2.32618,2.32618,0,0,0-3.04849.58278l-19.90118,18.749A2.95539,2.95539,0,0,0,691.22324,406.58134Z" transform="translate(-104.91508 -130.9659)" fill="#2f2e41"/><polygon points="589.51 271.985 634.498 297.699 646.469 276.122 607.876 255.135 589.51 271.985" fill="#3f3d56"/><ellipse cx="732.60441" cy="395.15744" rx="0.56465" ry="0.66226" transform="translate(-187.98265 430.13689) rotate(-39.84152)" fill="#f2f2f2"/><ellipse cx="715.90124" cy="417.23206" rx="0.37643" ry="0.4415" transform="translate(-206.00326 424.56103) rotate(-39.84152)" fill="#f2f2f2"/><path d="M762.77662,428.49733s-46.27992,3.24414-39.87786-5.37073,37.06788-15.11223,42.38188-12.73642S762.77662,428.49733,762.77662,428.49733Z" transform="translate(-104.91508 -130.9659)" fill="#ffc1c7"/><path d="M817.548,324.046s-29.60182,7.94195-15.8839,33.2118c0,0,22.38186,44.04173,12.99592,46.92972s-52.70568,1.444-52.70568,1.444-10.10794,24.54785-5.054,25.26984,85.91748,17.3279,94.58142,1.444,0-84.47349,0-84.47349S839.2079,313.938,817.548,324.046Z" transform="translate(-104.91508 -130.9659)" fill="#3997ff"/><rect x="264.55575" y="161.33009" width="260.02832" height="129.16991" rx="13.52362" fill="#f2f2f2"/><circle cx="17" cy="23.5" r="17" fill="#3997ff"/><circle cx="22" cy="17.5" r="17" fill="none" stroke="#3f3d56" stroke-miterlimit="10"/><circle cx="224" cy="237.5" r="17" fill="#f2f2f2"/><circle cx="229" cy="231.5" r="17" fill="none" stroke="#3f3d56" stroke-miterlimit="10"/><circle cx="356" cy="108.5" r="17" fill="#3997ff"/><circle cx="361" cy="102.5" r="17" fill="none" stroke="#3f3d56" stroke-miterlimit="10"/><rect x="38.71947" y="62.97522" width="260.02832" height="129.16991" rx="13.52362" fill="#3997ff"/><rect x="53.91593" y="52" width="260.02832" height="129.16991" rx="13.52362" fill="none" stroke="#3f3d56" stroke-miterlimit="10"/><rect x="279.75221" y="150.35487" width="260.02832" height="129.16991" rx="13.52362" fill="none" stroke="#3f3d56" stroke-miterlimit="10"/></svg>
            </div>
    </div>

    <div class="row" style="margin: 12rem 0">
        <div class="jumbotron jumbotron-fluid rounded-lg" style="background-color: #F6FAFF">
            <div class="container">
                <div class="row px-4">
                    <div class="col-md-6">
                        <h3 class="py-2">Watch our video</h3>
                        <p>We take the work out of connecting with others so you can accomplish more. Learn how painless scheduling can be with {{ config('app.name') }}.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://source.unsplash.com/random/800x450" class="w-100 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin: 12rem 0">
        <div class="col-md-12 my-5">
            <h1 class="text-center">How it works</h1>
        </div>

        <div class="row my-4">
            <div class="offset-md-1 col-3 mr-3 mb-3">
                <img src="https://source.unsplash.com/random/500x500" alt="" class="img-fluid rounded">
            </div>
            <div class="col-md-5">
                <strong>Share your link</strong>
                <p>Share your Calendly links via email or embed it on your website.</p>
            </div>
        </div>
        <div class="row my-4">
            <div class="offset-md-2 col-3 mr-3 mb-3">
                <img src="https://source.unsplash.com/random/500x500" alt="" class="img-fluid rounded">
            </div>
            <div class="col-md-5">
                <strong>Schedule</strong>
                <p>They pick a time and the event is added to your calendar.</p>
            </div>
        </div>
        <div class="row my-4">
            <div class="offset-md-3 col-3 mr-3 mb-3">
                <img src="https://source.unsplash.com/random/500x500" alt="" class="img-fluid rounded">
            </div>
            <div class="col-md-5">
                <strong>Create rules</strong>
                <p>Setup is easy. Let Calendly know your availability preferences and it’ll do the work for you.</p>
            </div>
        </div>
    </div>

    <div class="row" style="margin: 12rem 0">
        <div class="col-md-12 my-5">
            <h1 class="text-center">Features that everyone will enjoy</h1>

            <div class="mt-5">
                <img src="https://source.unsplash.com/random/1600x900" alt="" class="img-fluid rounded">
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-4 p-4"><strong>Create rules</strong>
                <p>Setup is easy. Let Calendly know your availability preferences and it’ll do the work for you.</p>
            </div>
            <div class="col-md-4 p-4"><strong>Create rules</strong>
                <p>Setup is easy. Let Calendly know your availability preferences and it’ll do the work for you.</p>
            </div>
            <div class="col-md-4 p-4"><strong>Create rules</strong>
                <p>Setup is easy. Let Calendly know your availability preferences and it’ll do the work for you.</p>
            </div>
            <div class="col-md-4 p-4"><strong>Create rules</strong>
                <p>Setup is easy. Let Calendly know your availability preferences and it’ll do the work for you.</p>
            </div>
            <div class="col-md-4 p-4"><strong>Create rules</strong>
                <p>Setup is easy. Let Calendly know your availability preferences and it’ll do the work for you.</p>
            </div>
            <div class="col-md-4 p-4"><strong>Create rules</strong>
                <p>Setup is easy. Let Calendly know your availability preferences and it’ll do the work for you.</p>
            </div>
            <div class="col-md-12 my-3 text-center">
                <a href="#" class="">Learn more about features</a>
            </div>
        </div>
    </div>


    <div class="row" style="margin: 12rem 0">
        <div class="col text-center">
            <h1 class="mb-4">You're in good company</h1>
            <p class="mb-5">We're already connecting millions of people</p>
            <div class="my-4 py-3 border rounded">
                <p class="h1">2,123,254</p>
                <strong>Monthly Users</strong>
            </div>
            <p class="my-4">Trusted By</p>
            <div class="row">
                <div class="col-md-3">
                    <p class="text-secondary">Company</p>
                </div>
                <div class="col-md-3">
                    <p class="text-secondary">Company</p>
                </div>
                <div class="col-md-3">
                    <p class="text-secondary">Company</p>
                </div>
                <div class="col-md-3">
                    <p class="text-secondary">Company</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row" style="margin: 12rem 0">
        <div class="col">
            
        <div class="text-center">
            <h3>Get started for free today</h3>
            <div class="col-md-6 mx-auto">
                <form action="{{ route('home.signup') }}" method="post" class="form">
                    {{ csrf_field() }}
                    <div class="input-group my-4">
                        <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" name="email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Sign Up</button>
                        </div>
                    </div>
                </form>
                <small class="text-secondary">No credit card required
                </small>
            </div>
        </div>
        </div>

    </div>

@endsection
