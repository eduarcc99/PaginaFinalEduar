@extends('layouts.main')

@section('section_title', 'Amazonas 632 | Reserva')

@section('content')
<div class="reservation-hero">
    <div class="reservation-overlay"></div>
    <div class="container">
        <div class="text-center text-white position-relative">
            <h1 class="display-4 fade-in-down">Reserve su Mesa</h1>
            <p class="lead fade-in-up">Disfrute de una experiencia gastronómica única</p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="reservation-card">
                @if($errors->any())
                    <div class="alert alert-danger fade-in">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('reservation.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    
                    <!-- Detalles de la Reserva -->
                    <div class="reservation-section slide-in-left">
                        <h3>Detalles de la Reserva</h3>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="guests" name="guests" required>
                                        @for($i = 1; $i <= 8; $i++)
                                            <option value="{{ $i }}">{{ $i }} {{ $i == 1 ? 'persona' : 'personas' }}</option>
                                        @endfor
                                    </select>
                                    <label for="guests">Número de Personas</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="date" name="date" required
                                           min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                           max="{{ date('Y-m-d', strtotime('+30 days')) }}">
                                    <label for="date">Fecha</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="time" name="time" required>
                                        @php
                                            $start = strtotime('15:00');
                                            $end = strtotime('23:00');
                                            $interval = 15 * 60;
                                        @endphp

                                        @for($time = $start; $time <= $end; $time += $interval)
                                            <option value="{{ date('H:i', $time) }}">
                                                {{ date('H:i', $time) }}
                                            </option>
                                        @endfor
                                    </select>
                                    <label for="time">Hora</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos Personales -->
                    <div class="reservation-section slide-in-right">
                        <h3>Datos Personales</h3>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <label for="name">Nombre Completo</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <label for="email">Correo Electrónico</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                    <label for="phone">Teléfono</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="occasion" name="occasion">
                                        <option value="">Seleccione una ocasión</option>
                                        <option value="cumpleanos">Cumpleaños</option>
                                        <option value="aniversario">Aniversario</option>
                                        <option value="corporativo">Evento Corporativo</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                    <label for="occasion">Ocasión Especial</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="notes" name="notes" style="height: 100px"></textarea>
                                    <label for="notes">Notas Especiales o Requerimientos</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de Confirmación -->

                    <!-- Botón de Envío -->
                    <div class="text-center mt-4 fade-in">
                        <button type="button" class="btn btn-reservation" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                            Confirmar Reserva
                            <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.reservation-hero {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1920/400');
    background-size: cover;
    background-position: center;
    height: 300px;
    display: flex;
    align-items: center;
    position: relative;
    margin-bottom: -100px;
}

.reservation-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    padding: 2.5rem;
    position: relative;
    z-index: 1;
}

.reservation-section {
    margin-bottom: 2.5rem;
    padding-bottom: 2.5rem;
    border-bottom: 1px solid #eee;
}

.reservation-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.reservation-section h3 {
    color: #2c3e50;
    margin-bottom: 1.5rem;
    font-family: 'Playfair Display', serif;
}

.form-floating > .form-control,
.form-floating > .form-select {
    border: 1px solid #dee2e6;
    border-radius: 8px;
}

.form-floating > .form-control:focus,
.form-floating > .form-select:focus {
    border-color: #2c3e50;
    box-shadow: 0 0 0 0.25rem rgba(44, 62, 80, 0.25);
}

.btn-reservation {
    background-color: #2c3e50;
    color: white;
    padding: 15px 40px;
    border-radius: 50px;
    font-size: 1.1rem;
    transition: all 0.3s ease;
}

.btn-reservation:hover {
    background-color: #34495e;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Animaciones */
.fade-in-down {
    animation: fadeInDown 1s ease forwards;
    opacity: 0;
}

.fade-in-up {
    animation: fadeInUp 1s ease forwards;
    opacity: 0;
}

.slide-in-left {
    animation: slideInLeft 1s ease forwards;
    opacity: 0;
}

.slide-in-right {
    animation: slideInRight 1s ease forwards;
    opacity: 0;
}

.fade-in {
    animation: fadeIn 1s ease forwards;
    opacity: 0;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Responsive */
@media (max-width: 768px) {
    .reservation-hero {
        height: 200px;
        margin-bottom: -50px;
    }

    .reservation-card {
        padding: 1.5rem;
    }
}
</style>

<script>
// Validación del formulario
document.addEventListener('DOMContentLoaded', function() {
    // Establecer la fecha mínima y máxima
    const dateInput = document.getElementById('date');
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    const maxDate = new Date();
    maxDate.setDate(maxDate.getDate() + 30);
    
    dateInput.min = tomorrow.toISOString().split('T')[0];
    dateInput.max = maxDate.toISOString().split('T')[0];

    // Manejo del evento de envío del formulario
    const form = document.querySelector('.needs-validation');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el envío del formulario
        if (form.checkValidity()) {
            // Si el formulario es válido, mostrar el modal
            const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            confirmationModal.show();
        } else {
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
@endpush
