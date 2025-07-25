<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login - Abo Omar Academy</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <a href="/" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <path d="M13.7918663,0.358365126 L3.39788168,7.44144159 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.933988585,16.7491876 1.37907983,17.6576113 1.88977507,18.5176574 C2.46533284,19.4884884 3.14170082,20.3821487 3.914419,21.2176591 C4.6978553,22.048915 5.62282105,22.733932 6.70871347,23.2454151 C7.86569352,23.8137075 9.98130292,23.9869002 13.2016654,23.9869002 C13.5447265,23.9869002 13.8772803,23.9869002 14.199264,23.9869002 C16.5495676,23.9869002 18.8682722,23.8417786 20.9476603,23.5503151 C22.9843119,23.262239 24.7950847,22.8698219 26.3461339,22.3828433 C26.8311974,22.2168062 27.2814817,21.991149 27.6938222,21.7091849 C28.0434163,21.4675934 28.4866885,21.1233294 28.843655,20.7488503 C29.1823135,20.3966906 29.3867099,20.1612752 29.5744199,19.8964738 C29.8831456,19.4671462 30.1677983,18.978919 30.4432077,18.4463479 C30.8045261,17.7327489 31.1085173,16.9641468 31.3572438,16.1646745 C31.5089663,15.7061634 31.7007827,15.0312426 31.9086251,14.2984714 C32.1557544,13.4363157 32.4000542,12.5253094 32.6375802,11.6027397 C32.789796,10.9913534 32.926501,10.3238482 33.0492854,9.65435626 C33.1655851,8.98584988 33.2682884,8.31761629 33.3586645,7.64852264 C33.4502431,6.97666697 33.5294837,6.30410569 33.5976674,5.63080325 C33.6574142,5.00331553 33.7003074,4.37552433 33.7370984,3.74722452 C33.7739095,3.10628469 33.8034996,2.46522753 33.8258541,1.82384258 C33.8421363,1.35573261 33.8547992,0.887177659 33.863842,0.418176026 C33.8772227,-0.0796330737 33.8772227,-0.591645003 33.863842,-1.10365693 C33.8547992,-1.57265856 33.8421363,-2.04121352 33.8258541,-2.50932349 C33.8034996,-3.15070844 33.7739095,-3.7917656 33.7370984,-4.43270543 C33.7003074,-5.06100524 33.6574142,-5.68879644 33.5976674,-6.31628416 C33.5294837,-6.9895866 33.4502431,-7.66214788 33.3586645,-8.33400355 C33.2682884,-9.0030972 33.1655851,-9.67133079 33.0492854,-10.3398372 C32.926501,-11.0093291 32.789796,-11.6768343 32.6375802,-12.2882206 C32.4000542,-13.2107903 32.1557544,-14.1217966 31.9086251,-14.9839523 C31.7007827,-15.7167235 31.5089663,-16.3916443 31.3572438,-16.8501554 C31.1085173,-17.6496277 30.8045261,-18.4182298 30.4432077,-19.1318288 C30.1677983,-19.6643999 29.8831456,-20.1526271 29.5744199,-20.5819547 C29.3867099,-20.8467561 29.1823135,-21.0821715 28.843655,-21.4343312 C28.4866885,-21.8088103 28.0434163,-22.1530743 27.6938222,-22.3946658 C27.2814817,-22.6766299 26.8311974,-22.9022871 26.3461339,-23.0683242 C24.7950847,-23.5553028 22.9843119,-23.9477199 20.9476603,-24.235796 C18.8682722,-24.5272595 16.5495676,-24.6723811 14.199264,-24.6723811 C13.8772803,-24.6723811 13.5447265,-24.6723811 13.2016654,-24.6723811 C9.98130292,-24.6723811 7.86569352,-24.4991884 6.70871347,-23.930896 C5.62282105,-23.4194129 4.6978553,-22.7343959 3.914419,-21.9031401 C3.14170082,-21.0676297 2.46533284,-20.1739694 1.88977507,-19.2031384 C1.37907983,-18.3430923 0.933988585,-17.4346686 0.557900856,-16.4815361 C-0.379795268,-13.1643407 0.566865006,-10.3795699 3.39788168,-8.12692262 L13.7918663,0.358365126 Z" id="path-1"></path>
                                            <path d="M20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 Z" id="path-3"></path>
                                            <path d="M20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 Z" id="path-4"></path>
                                            <path d="M20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 Z" id="path-5"></path>
                                        </defs>
                                        <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                                <g id="Icon" transform="translate(27.000000, 15.000000)">
                                                    <path d="M13.7918663,0.358365126 L3.39788168,7.44144159 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.933988585,16.7491876 1.37907983,17.6576113 1.88977507,18.5176574 C2.46533284,19.4884884 3.14170082,20.3821487 3.914419,21.2176591 C4.6978553,22.048915 5.62282105,22.733932 6.70871347,23.2454151 C7.86569352,23.8137075 9.98130292,23.9869002 13.2016654,23.9869002 C13.5447265,23.9869002 13.8772803,23.9869002 14.199264,23.9869002 C16.5495676,23.9869002 18.8682722,23.8417786 20.9476603,23.5503151 C22.9843119,23.262239 24.7950847,22.8698219 26.3461339,22.3828433 C26.8311974,22.2168062 27.2814817,21.991149 27.6938222,21.7091849 C28.0434163,21.4675934 28.4866885,21.1233294 28.843655,20.7488503 C29.1823135,20.3966906 29.3867099,20.1612752 29.5744199,19.8964738 C29.8831456,19.4671462 30.1677983,18.978919 30.4432077,18.4463479 C30.8045261,17.7327489 31.1085173,16.9641468 31.3572438,16.1646745 C31.5089663,15.7061634 31.7007827,15.0312426 31.9086251,14.2984714 C32.1557544,13.4363157 32.4000542,12.5253094 32.6375802,11.6027397 C32.789796,10.9913534 32.926501,10.3238482 33.0492854,9.65435626 C33.1655851,8.98584988 33.2682884,8.31761629 33.3586645,7.64852264 C33.4502431,6.97666697 33.5294837,6.30410569 33.5976674,5.63080325 C33.6574142,5.00331553 33.7003074,4.37552433 33.7370984,3.74722452 C33.7739095,3.10628469 33.8034996,2.46522753 33.8258541,1.82384258 C33.8421363,1.35573261 33.8547992,0.887177659 33.863842,0.418176026 C33.8772227,-0.0796330737 33.8772227,-0.591645003 33.863842,-1.10365693 C33.8547992,-1.57265856 33.8421363,-2.04121352 33.8258541,-2.50932349 C33.8034996,-3.15070844 33.7739095,-3.7917656 33.7370984,-4.43270543 C33.7003074,-5.06100524 33.6574142,-5.68879644 33.5976674,-6.31628416 C33.5294837,-6.9895866 33.4502431,-7.66214788 33.3586645,-8.33400355 C33.2682884,-9.0030972 33.1655851,-9.67133079 33.0492854,-10.3398372 C32.926501,-11.0093291 32.789796,-11.6768343 32.6375802,-12.2882206 C32.4000542,-13.2107903 32.1557544,-14.1217966 31.9086251,-14.9839523 C31.7007827,-15.7167235 31.5089663,-16.3916443 31.3572438,-16.8501554 C31.1085173,-17.6496277 30.8045261,-18.4182298 30.4432077,-19.1318288 C30.1677983,-19.6643999 29.8831456,-20.1526271 29.5744199,-20.5819547 C29.3867099,-20.8467561 29.1823135,-21.0821715 28.843655,-21.4343312 C28.4866885,-21.8088103 28.0434163,-22.1530743 27.6938222,-22.3946658 C27.2814817,-22.6766299 26.8311974,-22.9022871 26.3461339,-23.0683242 C24.7950847,-23.5553028 22.9843119,-23.9477199 20.9476603,-24.235796 C18.8682722,-24.5272595 16.5495676,-24.6723811 14.199264,-24.6723811 C13.8772803,-24.6723811 13.5447265,-24.6723811 13.2016654,-24.6723811 C9.98130292,-24.6723811 7.86569352,-24.4991884 6.70871347,-23.930896 C5.62282105,-23.4194129 4.6978553,-22.7343959 3.914419,-21.9031401 C3.14170082,-21.0676297 2.46533284,-20.1739694 1.88977507,-19.2031384 C1.37907983,-18.3430923 0.933988585,-17.4346686 0.557900856,-16.4815361 C-0.379795268,-13.1643407 0.566865006,-10.3795699 3.39788168,-8.12692262 L13.7918663,0.358365126 Z" id="Combined-Shape" fill="#696cff"></path>
                                                    <path d="M20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 Z" id="Combined-Shape" fill="#696cff"></path>
                                                    <path d="M20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 Z" id="Combined-Shape" fill="#696cff"></path>
                                                    <path d="M20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 C20.945,8.46846667 20.945,8.46846667 20.945,8.46846667 Z" id="Combined-Shape" fill="#696cff"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="app-brand-text demo text-heading fw-bolder">Abo Omar Academy</span>
                            </a>
                        </div>
                        <h4 class="mb-2">Welcome to Abo Omar Academy! 👋</h4>
                        <p class="mb-4">Please sign-in to your account</p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus value="{{ old('email') }}" />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="/">
                                <span>Create an account</span>
                            </a>
                        </p>

                        <div class="divider my-4">
                            <div class="divider-text">or</div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/" class="btn btn-icon btn-label-facebook me-3">
                                <i class="tf-icons bx bxl-facebook"></i>
                            </a>

                            <a href="/" class="btn btn-icon btn-label-google-plus me-3">
                                <i class="tf-icons bx bxl-google"></i>
                            </a>

                            <a href="/" class="btn btn-icon btn-label-twitter">
                                <i class="tf-icons bx bxl-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
</body>
</html> 