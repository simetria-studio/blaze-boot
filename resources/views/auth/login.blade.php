@extends('layouts.auth')

@section('content')
    <div>
        <div class="text-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
        <div class="login-main">
            <div class="text-center">
                <h3>ENTRAR N0 BLAZE BOOT</h3>
            </div>
            <div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group my-3">
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="text-center my-3">
                        <button type="submit" class="btn-index">ENTRAR</button>
                    </div>
                </form>
            </div>
            <div class="icons-grid">
                <div>
                    <img src="{{ asset('assets/img/instagram.svg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('assets/img/whatsapp.svg') }}" alt="">
                </div>
            </div>
            <div class="text-center my-3 mb-3 pb-5">
                <button type="button" class="btn-green">QUERO COMPRAR O BOT AGORA!</button>
            </div>
        </div>
    </div>
@endsection
