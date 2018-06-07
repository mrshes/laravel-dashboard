@extends('dashboard.layouts.default')
@section('content')
        <div class="col-9 container_block mr-0 p-0">
            <div class="row block_pages_images">
                <div class="col-12">
                    <div class="row  pt-5">
                        <div class="col-md-6">
                            <div class="text_pages">
                                <span class="John-Silver">Josh Silver</span>
                            </div>
                        </div>
                        <div class="col-md-1 display_none_14 offset-5 text-right p-0"><a href="#"><img src="{{ asset('img/icon-setting2.png') }}" alt=""></a></div>
                    </div>
                    <div class="row mt-4" >
                        <div class="col-md-6">
                            <div class="textarea_pages">
                                <span>Описание кратное о человеке или сервисе</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Block Balance--}}
            <div class="row block_content">
                <div class="col-auto block_info_balance">
                    <div class="block_balance">
                        <div class="row">
                            <div class="col-md-12 Balance"><span class="">Balance</span></div>
                        </div>
                        <div class="row block_balance_cent">
                            <div class="col-md-8 col-sm-12">
                                <span class="layer_cent">009.056.000</span>
                            </div>
                            <div class="col-md-1 display_none_75">
                                <span  class="layer_rav">=</span>
                            </div>
                            <div class="col-md-3 display_none_75 text-right">
                                <span  class="layer_result">23</span>
                            </div>
                        </div>
                        <div class="row satoshi">
                            <div class="col-md-6">
                                <span>satoshi</span>
                            </div>
                            <div class="col-md-6 display_none_75 text-right">
                                <span>usd</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col block_info_faucet">
                    <div class="block_faucet">
                        <div class="row">
                            <div class="col-md-12 Balance"><span class="">New faucet</span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn add_faucet" type="button">+ Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block_content padding_75 ">
                <div class="col-12 table_faucets">
                    <div class="row">
                        <div class="col-md-12 Balance"><span class="">My faucet</span></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <table class="table table-hover table-borderless ">
                                <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>name</th>
                                    <th class="display_none_75" >template</th>
                                    <th>timer</th>
                                    <th>Payment</th>
                                    <th class="display_none_75" colspan="3">Captcha</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td class="display_none_75" >Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td class="display_none_75" >reCaptcha</td>
                                    <td class="display_none_75" ><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td class="display_none_75" ><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td class="display_none_75" >Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td class="display_none_75" >reCaptcha</td>
                                    <td class="display_none_75" ><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td class="display_none_75" ><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td class="display_none_75" >Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td class="display_none_75" >reCaptcha</td>
                                    <td class="display_none_75" ><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td class="display_none_75" ><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                <tr>
                                    <td><img src="{{ asset('img/fox-icon.png') }}" alt=""></td>
                                    <td><a href="#">Foxy coin... <img src="{{ asset('img/link-icon.png') }}" alt=""></a></td>
                                    <td class="display_none_75" >Model 1</td>
                                    <td>every 8 h</td>
                                    <td>950 satoshi</td>
                                    <td class="display_none_75" >reCaptcha</td>
                                    <td class="display_none_75" ><a href="#"><img class="delete_table" src="{{ asset('img/edit_table.png') }}" alt=""></a></td>
                                    <td class="display_none_75" ><a href="#"><img class="edit_table" src="{{ asset('img/delete_table.png') }}" alt=""></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block_content padding_75">
                <section class="block_charts">
                    <div class="col traffic_overview">
                            <div class="row">
                                <div class="col traffic_header_text">
                                    <span>Traffic overview</span>
                                </div>
                            </div>

                            <div class="row grafic_block">
                                <div class="col-auto mr-auto text-center">
                                    <div class="row t_header">
                                        <div class="col">
                                            <div class="h6 text-center">
                                                <span>Browser</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <input class="knob" data-addval="%" data-width="171" data-thickness=".2" data-readOnly=true
                                                   value="{{ rand(1, 100) }}">
                                            <ul class="list-unstyled list_traff">
                                                <li>Chrome</li>
                                                <li>Safari</li>
                                                <li>Firefox</li>
                                                <li>ie9</li>
                                                <li>Netscape</li>
                                                <li>Unknow</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto m-auto text-center">
                                    <div class="row t_header">
                                        <div class="col">
                                            <div class="h6 text-center">
                                                <span>Sumary</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <input class="knob" data-addval="Avg" data-width="171" data-thickness=".2" data-readOnly=true
                                                   value="{{ rand(1, 100) }}">
                                            <ul class="list-unstyled list_traff">
                                                <li>Page Views</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                            </ul>
                                        </div>
                                        <div class="col xl_screen">
                                            <input class="knob" data-addval="Avg" data-width="171" data-thickness=".2" data-readOnly=true
                                                   value="{{ rand(1, 100) }}">
                                            <ul class="list-unstyled list_traff">
                                                <li>Visits</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                            </ul>
                                        </div>
                                        <div class="col xl_screen">
                                            <input class="knob" data-addval="Avg" data-width="171" data-thickness=".2" data-readOnly=true
                                                   value="{{ rand(1, 100) }}">
                                            <ul class="list-unstyled list_traff">
                                                <li>Audience</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                                <li>{{ rand(1, 100) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto ml-auto text-center d-none d-md-block">
                                    <div class="row t_header">
                                        <div class="col">
                                            <div class="h6 text-center ">
                                                <span>System</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col">
                                            <input class="knob" data-addval="%" data-width="171" data-thickness=".2" data-readOnly=true
                                                   value="{{ rand(1, 100) }}">
                                            <ul class="list-unstyled list_traff">
                                                <li>MacOSX</li>
                                                <li>Safari</li>
                                                <li>Firefox</li>
                                                <li>ie9</li>
                                                <li>Netscape</li>
                                                <li>Unknow</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </section>
            </div>
            <div class="row block_content padding_75">
                <div class="col">
                            <canvas id="myChart" width="100" height="50"></canvas>
                        </div>
            </div>
    </div>
@endsection