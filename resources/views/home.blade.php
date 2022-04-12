@extends('layouts.main')

@section('content')
    <div class="white-stripe">
    </div>
    <div class="main">
        <div class="main-grid">
            <div class="block">
                <div class="text-center">
                    <h4>STATUS: <span class="text-success">ATIVO</span></h4>
                </div>
                <div>
                    <h5>LUCRO DA BLAZE NO DOUBLE: <span id="lucro" class="text-success">R$ 0</span></h5>
                    <h5>TOTAL APOSTADO NO DOUBLE: <span id="total" class="text-success">R$ 0</span></h5>
                </div>
                <div class="main-chart">
                    <div class="div-chart">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="block-grid">
                    <div class="d-flex">
                        <div>
                            <div class="red"> </div>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="redblack">R$ 0</p>
                        </div>
                        <div class="mx-2 mt-2">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="red" class="text-green">R$ 0</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div>
                            <div class="white"> </div>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="whiteAposta">R$ 0</p>
                        </div>
                        <div class="mx-2 mt-2">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="whiteValue">R$ 0</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div>
                            <div class="black"> </div>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="blackAposta">R$ 0</p>
                        </div>
                        <div class="mx-2 mt-2">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="blackValue" class="text-green">R$ 0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="block-grid">
                    <div class="d-flex">
                        <div>
                            <div class="red"> </div>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="redval">46 - 45,09%</p>
                        </div>

                    </div>
                    <div class="d-flex">
                        <div>
                            <div class="white"> </div>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="whiteval">5 - 6,78%</p>
                        </div>

                    </div>
                    <div class="d-flex">
                        <div>
                            <div class="black"> </div>
                        </div>
                        <div class="mx-2 mt-2">
                            <p id="blackval">48 - 43,07%</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="result">

        </div>

        <div class="instagram text-center mt-5 text-light">
            <h4>@blaze.boot</h4>
            <img width="30" src="{{ asset('assets/img/instagram.svg') }}" alt="">
        </div>
        <div class="logo-waltermark">
            <div>
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
