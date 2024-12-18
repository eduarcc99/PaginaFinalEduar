@extends('layouts.main')

@section('section_title', 'Amazonas 632 | Inicio')

@section('content')
    {{-- Sección Principal --}}
    <div class="container my-5 mt-5" style="border-top: 100px solid transparent;">
        <div class="row align-items-center">
            {{-- Contenido Izquierdo --}}
            <div class="col-md-6 text-center text-md-start">
                <h2 class="fw-bold mb-3" style="font-family: 'Georgia', serif; color: rgb(241, 147, 54);">
                    <strong>Amazonas 632</strong>
                </h2>
                <h3 class="fw-normal text-dark" style="font-size: 2rem;">Cafe-Bar-Restaurant</h3>
                <hr class="w-25 mx-auto mx-md-0 my-4 border-2 border-dark">
                <p class="text-muted fs-6">
                    En Amazonas 632, cada visita es un viaje de sabores. Desde el primer café de la mañana hasta esa cena especial, te invitamos a disfrutar de una experiencia única en un ambiente cálido y acogedor.
                </p>
                <p class="text-muted fs-6">
                    Relájate, desconéctate y deja que nuestros sabores frescos y auténticos te transporten. ¡Nos vemos en Amazonas 632, donde la buena comida, el café perfecto y los mejores momentos te esperan!
                </p>
                {{-- Botón Leer Más --}}
                <button type="submit" class="btn btn-danger px-5 py-2" style="background-color: rgb(241, 147, 54); border-color: rgb(241, 147, 54);">
                    Leer Mas
                </button>
            </div>
    
            {{-- Imágenes Derecha --}}
            <div class="col-md-6 d-flex justify-content-center">
                <div class="row">
                    <div class="col-6 mb-4">
                        <img src="{{ asset('img/123.jpg') }}" 
                             alt="imagen 1" 
                             class="img-fluid border border-2 rounded" style="border: 2px solid rgb(241, 147, 54);">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('img/123.jpg') }}" 
                             alt="imagen 2" 
                             class="img-fluid border border-2 rounded" style="border: 2px solid rgb(241, 147, 54);">
                    </div>
                </div>
            </div>            
        </div>
    </div>
    

    {{-- Nueva Sección de la Chef --}}
    <div class="row my-5 align-items-center">
        {{-- Imagen de la Chef --}}
        <div class="col-md-6 text-center" style="border-left: 50px solid transparent;">
            <img src="{{ asset('img/mozos.jpg') }}" alt="personal" class="img-fluid">
        </div>
        
        

        {{-- Texto de la Chef --}}
        <div class="col-md-6">
            <div class="p-4 bg-dark text-light position-relative" style="border: 2px solid rgb(241, 147, 54);">
                <h3 class="fw-bold mb-3" style="font-family: 'Georgia', serif; color: rgb(241, 147, 54);">MOZOS AMIGABLES</h3>
                <p>
                    En Amazonas 632 no solo encontrarás deliciosos platos y café de primera, sino también un equipo que te hará sentir como en casa. Nuestro personal está siempre dispuesto a hacerte sonreír y brindarte un servicio cálido y cercano.
                </p>
                <p>
                    ¡Te esperamos con los brazos abiertos en Amazonas 632!
                </p>
            </div>
        </div>
    </div>

    {{-- Sección de Suscripción --}}
    <div class="row my-5 mt-5">
        <div class="col-12 position-relative">
            <div class="subscription-section text-center py-5" 
                 style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('{{ asset('img/fondo3.jpg') }} ') no-repeat center center; background-size: cover;">
                <h2 class="fw-bold mb-3" style="font-family: 'Georgia', serif; color: rgb(241, 147, 54);">Suscríbete y recibe muchos beneficios</h2>
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-envelope text-primary"></i>
                                        </span>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-user text-primary"></i>
                                        </span>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombres" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-danger px-5 py-2" style="background-color: rgb(241, 147, 54); border-color: rgb(241, 147, 54);">Suscribirse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Estilos adicionales --}}
    @push('styles')
    <style>
        .h2,h3 {
            color: rgb(241, 147, 54);
        }

        .border-personalizado {
    border: 2px solid rgb(241, 147, 54) !important;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @endpush
@endsection