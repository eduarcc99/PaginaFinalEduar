@extends('layouts.main')

@section('section_title', 'Amazonas 632 | Promociones')

@section('content')
<div class="section-container" style="border-top: 100px solid transparent;">
    <div class="card mb-3" style="max-width: 100%; background-color: transparent;">
        <div class="row g-0">
          <div class="col-md-8">
            <img src="{{ asset('img/promo 1.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 1000px; height: 500px; border-left: 50px solid transparent;">
          </div>
          <div class="col-md-4">
            <div class="card-body" style="background-color: transparent;">
              <h5 class="card-title"><strong>PROMOCION TRAGOS + TEQUEÑOS</strong></h5>
              <p class="card-text">¡Aprovecha la oferta! Puedes adquirir que la oferta que viene 2 chiclanos o piscos del mismo sabor
                mas una porción de tequeños de queso, todo sale a S/29.00 soles ¡Aprovecha!</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 100%; background-color: transparent;">
        <div class="row g-0">
          <div class="col-md-8">
            <img src="{{ asset('img/promo 2.jpeg') }}" class="img-fluid rounded-start" alt="..." style="width: 1000px; height: 500px; border-left: 50px solid transparent;">
          </div>
          <div class="col-md-4">
            <div class="card-body" style="background-color: transparent;">
              <h5 class="card-title"><strong>PROMOCION TRAGOS</strong></h5>
              <p class="card-text">Paga solo S/20.00 por la compra de 2 chilcanos o piscos del mismo sabor</p>
            </div>
          </div>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 100%; background-color: transparent;">
        <div class="row g-0">
          <div class="col-md-8">
            <img src="{{ asset('img/promo 3.jpeg') }}" class="img-fluid rounded-start" alt="..." style="width: 1000px; height: 500px; border-left: 50px solid transparent;">
          </div>
          <div class="col-md-4">
            <div class="card-body" style="background-color: transparent;">
              <h5 class="card-title"><strong>FELIZ CUMPLEAÑOS</strong></h5>
              <p class="card-text">Para celebrar un dia tan especial como tu cumpleaños, ven reclama un postre o un chicalno o pisco como cortesia
                de la casa, para Amazonas 632, tu cumpleaños es importante.</p>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
@endpush

{{-- Estilos adicionales --}}
@push('styles')
<style>
    .h2, h3 {
        color: rgb(241, 147, 54);
    }

    .border-personalizado {
        border: 2px solid rgb(241, 147, 54) !important;
    }

    .section-container {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .section {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .left-image img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Hace que la imagen se ajuste mejor */
    }

    .right-text {
        flex: 1;
        padding-left: 20px;
    }

    .right-text h1 {
        font-size: 24px;
        margin-bottom: 15px;
        color: rgb(241, 147, 54);
    }

    .right-text p {
        font-size: 16px;
        line-height: 1.6;
    }

    .section-2 .left-image img {
        order: 1;
    }

    .section-2 .right-text {
        order: 2;
    }

    /* Estilos para las tarjetas */
    .card {
        background-color: transparent; /* Sin color de fondo */
        border: none; /* Elimina el borde de la tarjeta */
    }

    /* Estilo para las imágenes dentro de las tarjetas */
    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Asegura que las imágenes cubran todo el espacio disponible */
    }

    /* Estilo para los títulos h5 y párrafos p */
    .card-title {
        font-size: 36px; /* Tamaño de letra mayor para los h5 */
        font-family: 'Playfair Display', serif; /* Tipo de letra estilizado */
        color: #FF5733; /* Color del texto para destacar el título */
    }

    .card-text {
        font-size: 28px; /* Tamaño de letra mayor para los párrafos */
        font-family: 'Playfair Display', serif; /* Tipo de letra estilizado */
        color: #333333; /* Color de texto más suave */
        background-color: rgba(255, 255, 0, 0.2); /* Fondo amarillo suave para destacar la descripción */
        padding: 10px; /* Espaciado interno para mejor legibilidad */
        border-radius: 5px; /* Bordes redondeados */
    }

    .subscription-section {
        min-height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .input-group-text {
        border: none;
    }

    .form-control {
        border: none;
        padding: 0.75rem;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: rgb(241, 147, 54);
    }
</style>
@endpush
