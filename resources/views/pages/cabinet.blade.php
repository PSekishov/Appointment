@extends('layouts.defaultApp')

@section('title', 'Cabinet')

@section('content')
    <div class="cabinet">
        <h1>Page Cabinet</h1>
        <hr>
        <p>Мы рады видет вас <span class="name">{{ Auth::user()->name }}</span> в своём личном кабинете. Здесь вы сможите найти всю нужную о вас информацию.</p>
    </div>
@endsection
