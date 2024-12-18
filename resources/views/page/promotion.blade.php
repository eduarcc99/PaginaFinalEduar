@extends('layouts.main')
 
@section('section_title', 'Amazonas 632 | Promociones')
 
@section('content')
<div class="promotions-container">
    <!-- Header -->
    <div class="promo-header text-center mb-5" style="border-top: 100px solid transparent;">
        <h1 class="display-4">Nuestras Promociones</h1>
        <p class="lead">Disfruta de nuestras increíbles ofertas especialmente para ti en Amazonas 632</p>
    </div>

    <!-- Promoción Cumpleaños -->
    <div class="promo-item">
        <div class="promo-content">
            <div class="promo-text fade-in-left">
                <h2>¡Feliz Cumpleaños!</h2>
                <p class="promo-description">Celebra tu día especial con nosotros. Aplica presentando tu DNI el día de tu cumpleaños.</p>
                <ul class="promo-details">
                    <li>postre o un chilcano o pisco como cortesía de la casa</li>
                </ul>
                <a href="#" class="btn btn-dark btn-lg">
                    Reservar ahora
                </a>
            </div>
            <div class="promo-image fade-in-right">
                <img src="{{ asset('img/promo 3.jpeg') }}"  alt="Promoción cumpleaños" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>

    <!-- Promoción Tequeños -->
    <div class="promo-item reverse">
        <div class="promo-content">
            <div class="promo-image fade-in-left">
                <img src="{{ asset('img/promo 2.jpeg') }}" alt="Promoción tequeños" class="rounded-lg shadow-lg">
            </div>
            <div class="promo-text fade-in-right">
                <h2>PROMOCION TEQUEÑOS</h2>
                <p class="promo-description">Obtén una porción de: </p>
                <ul class="promo-details">
                    <li>tequeños de queso</li>
                    <li>S/. 10.00</li>
                </ul>
                <a href="#" class="btn btn-dark btn-lg">
                    Reservar ahora
                </a>
            </div>
        </div>
    </div>

    <!-- Promoción Tragos + Tequeños -->
    <div class="promo-item">
        <div class="promo-content">
            <div class="promo-text fade-in-left">
                <h2>PROMOCION TRAGOS + TEQUEÑOS</h2>
                <p class="promo-description">¡Aprovecha la oferta!</p>
                <ul class="promo-details">
                    <li>2 Chilcanos o piscos del mismo sabor</li>
                    <li>Una porcion de tequeños de queso</li>
                    <li>S/. 29.00</li>
                </ul>
                <a href="#" class="btn btn-dark btn-lg">
                    Reservar ahora
                </a>
            </div>
            <div class="promo-image fade-in-right">
                <img src="{{ asset('img/promo 1.jpg') }}" alt="Promoción tragos y tequeños" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</div>

<style>
.promotions-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 4rem 1rem;
}

.promo-header {
    margin-bottom: 5rem;
}

.promo-header h1 {
    font-family: 'Playfair Display', serif;
    color: #2c3e50;
    margin-bottom: 1rem;
}

.promo-item {
    margin-bottom: 8rem;
}

.promo-content {
    display: flex;
    align-items: center;
    gap: 4rem;
}

.reverse .promo-content {
    flex-direction: row-reverse;
}

.promo-text {
    flex: 1;
}

.promo-text h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #2c3e50;
    margin-bottom: 1.5rem;
}

.promo-description {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.promo-details {
    list-style: none;
    padding: 0;
    margin-bottom: 2rem;
}

.promo-details li {
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
    position: relative;
}

.promo-details li:before {
    content: "•";
    color: #2c3e50;
    position: absolute;
    left: 0;
}

.promo-image {
    flex: 1;
}

.promo-image img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.promo-image img:hover {
    transform: scale(1.02);
}

.btn {
    padding: 0.8rem 2rem;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Animaciones */
.fade-in-left {
    opacity: 0;
    transform: translateX(-50px);
    animation: fadeInLeft 1s ease forwards;
}

.fade-in-right {
    opacity: 0;
    transform: translateX(50px);
    animation: fadeInRight 1s ease forwards;
}

@keyframes fadeInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .promo-content {
        flex-direction: column;
        gap: 2rem;
    }

    .reverse .promo-content {
        flex-direction: column;
    }

    .promo-text, .promo-image {
        width: 100%;
    }

    .promo-text {
        text-align: center;
    }

    .promo-details li {
        text-align: left;
    }

    .promo-item {
        margin-bottom: 4rem;
    }
}
</style>
@endsection
 
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
@endpush
