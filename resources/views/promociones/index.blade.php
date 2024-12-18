@extends('layouts.main')

@section('section_title', 'Amazonas 632 | Promociones')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center g-4">
        <!-- Primera Imagen -->
        <div class="col-md-4 text-center">
            <div class="card">
                <img src="{{ asset('img/promo 1.jpg') }}" class="card-img-top" alt="Promoción 1">
                <div class="card-body">
                    <p class="card-title font-weight-bold">PROMOCION TRAGOS + TEQUEÑOS</p>
                    <p class="card-text">¡Aprovecha la oferta! Puedes adquirir 2 chilcanos o piscos del mismo sabor más una porción de tequeños de queso por S/29.00 soles. ¡Aprovecha!</p>
                </div>
            </div>
        </div>

        <!-- Segunda Imagen -->
        <div class="col-md-4 text-center">
            <div class="card">
                <img src="{{ asset('img/promo 2.jpeg') }}" class="card-img-top" alt="Promoción 2">
                <div class="card-body">
                    <p class="card-title font-weight-bold">PROMOCION TEQUEÑOS</p>
                    <p class="card-text">Obtén una porción de tequeños de queso por S/10.00 soles.</p>
                </div>
            </div>
        </div>

        <!-- Tercera Imagen -->
        <div class="col-md-4 text-center">
            <div class="card">
                <img src="{{ asset('img/promo 3.jpeg') }}" class="card-img-top" alt="Promoción 3">
                <div class="card-body">
                    <p class="card-title font-weight-bold">FELIZ CUMPLEAÑOS</p>
                    <p class="card-text">Celebra tu cumpleaños con un postre o un chilcano o pisco como cortesía de la casa. Para Amazonas 632, tu día especial es importante.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
@endpush
