@extends('layouts.main')

@section('section_title', 'Amazonas 632 | Promociones')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Reserva tu Mesa</h2>

    <form class="shadow p-4 rounded bg-light">
        {{-- Campos Nombre y Apellido --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="first_name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="first_name" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" placeholder="Ingresa tu apellido" required>
            </div>
        </div>

        {{-- Campos Teléfono y Correo --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="phone" placeholder="Ejemplo: +51 987 654 321" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" required>
            </div>
        </div>

        {{-- Campos Fecha y Hora --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="reservation_date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="reservation_date" required>
            </div>
            <div class="col-md-6">
                <label for="reservation_time" class="form-label">Hora</label>
                <input type="time" class="form-control" id="reservation_time" required>
            </div>
        </div>

        {{-- Botón de Enviar --}}
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-4 py-2">Reservar</button>
        </div>
    </form>
</div>
@endsection

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<style>
    h2 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        color: #333;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
    }

    button.btn {
        font-size: 1.1rem;
        font-weight: bold;
        background-color: #007bff;
        border: none;
    }

    button.btn:hover {
        background-color: #0056b3;
    }
</style>
@endpush
