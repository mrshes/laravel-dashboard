<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('dashboard.layouts.scripts')
</head>
<body class="lp">
<div class="wrap">
    <section>
        <div class="curr">
            <div class="container-fluid">
                <div class="row curr__block justify-content-center">
                    <div class="col-10 curr_wrap">
                        <div class="d-flex flex-wrap  align-content-end">
                            <div class="curr__cont">
                                <div class="curr__name">bitcoin</div>
                                <div class="curr__value"><span >$5.1001.5</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">bitcoin-cash</div>
                                <div class="curr__value"><span >$710.55</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">ethereum</div>
                                <div class="curr__value"><span >$380.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">dash</div>
                                <div class="curr__value"><span >$400.501</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">litecoin</div>
                                <div class="curr__value"><span >$210.55</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">ripple</div>
                                <div class="curr__value"><span>$0.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">monero</div>
                                <div class="curr__value"><span >$380.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">neo</div>
                                <div class="curr__value"><span >$50.501</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">liota</div>
                                <div class="curr__value"><span >$0.955</span><span class="curr__value_perc"><i class="fas fa-caret-up"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">nem</div>
                                <div class="curr__value"><span >$0.123</span><span class="curr__value_subsid"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                            <div class="curr__cont">
                                <div class="curr__name">neo</div>
                                <div class="curr__value"><span >$50.501</span><span class="curr__value_perc"><i class="fas fa-caret-down"></i>0.31%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 cur__rel justify-content-center align-baseline">
                        <div class="">
                            link to <a href="#">icex.ch</a><i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<header class="header_lp" id="header_lp">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand header_lp__logo" href="#"><img src="{{ asset('img/logo_icon.svg') }}" alt=""> REWARDATRON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_lp__navbar" aria-controls="header_lp__navbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="header_lp__navbar">
            <ul class="navbar-nav m-auto">
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="#"><img src="{{ asset('img/logo_icon.svg') }}" alt="">REWARDATRON <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="#">ADVANTAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WE OFFER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TABLE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-0">
                <li class="nav-item">
                    <button class="header_lp__lang" type="button" >ENG</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="header_lp__sign">SIGN UP</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="header_lp__login">LOGIN</button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="d-flex align-items-end">
            <img src="" alt="">
            <span>rewardatron</span>
        </div>
    </div>
</header>
<section>
    <div class="container-fluid">
        <div class="faucet">
            <div class="row">
                <div class="faucet__title">
                    <span>01</span>
                    <span>Faucet Constructor</span>
                </div>
                <div class="col-md-6 faucet__left">
                    <img src="{{ asset('img/cons.svg') }}" alt="">
                </div>
                <div class="col-md-6 faucet__right d-flex">
                    <div>
                        <div class="stick"></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Donec quam felis, ultricies nec,
                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>