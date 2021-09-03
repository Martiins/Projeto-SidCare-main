@extends('frontend.layouts.app')

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price.css') }}">

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="row mb-4 titulo">
        <div class="col-sm-6">
          <h1>SIDCARE</h1>
          <p>Plataforma de Serviços de Saúde para pessoas idosas <3 </p>
        </div><!--col-->
        <div class="col-sm-6">
          <img src="{{ asset('img/frontend/imagens/medicine.svg')}}" class="img-fluid" alt="Banner Inicial">
        </div>
    </div><!--row-->
@endsection
