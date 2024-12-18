@extends('layouts.main')
@section('section_title', 'Delivery')
@section('content')
    <div class="container-fluid" style="height: calc(100vh - 100px); padding: 0; margin: 0; border-top: 100px solid transparent;">
        <div class="delivery-section d-flex justify-content-between align-items-center" style="position: relative; color: rgb(0, 0, 0); padding: 50px; 
        background-image: url('https://img.freepik.com/fotos-premium/mesa-roja-mantel-rojo-comida-ella-fondo-rojo-mantellado-rojo-imagen-comida-ella_1034303-536942.jpg'); background-size: cover; background-position: center; background-attachment: fixed; border-bottom: 150px solid transparent;">
            
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.4);"></div>

            <div class="text-left" style="flex: 1; position: relative;">
                <h1 class="font-weight-bold" style="color: yellow; font-size: 50px;">DELIVERY</h1>
                <p style="color: yellow; font-size: 30px;">Llame o escríbanos   :</p>
                <h2 style="color: rgb(255, 255, 255); font-size: 45px; font-weight: bold;">970385862</h2>
                
                <div class="whatsapp-icon mt-4 position-relative">
                    <a href="https://wa.me/970385862" target="_blank" style="text-decoration: none;">
                        <img src="{{ asset('img/whats.png') }}" 
                             alt="WhatsApp"
                             class="animate-whatsapp"
                             style="width: 70px; height: 70px; transition: transform 0.3s ease-in-out;">
                    </a>
                    
                    <div class="click-here-tag position-absolute" style="top: -20px; left: 80px;">
                        </span>
                    </div>
                </div>
            </div>

            <div class="text-right" style="position: relative;">
                
                <div class="chamo-container ">
                    <img src="{{ asset('https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExaHN5ZTkwaXY3dnMwZmJzeHZ0ZjhjeGd4Z200Mjl1YmxjazhrMWNmdCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/gHQffP0xjacxnjkDA1/giphy.webp') }}" 
                         alt="Moto Corriendo"
                         class="img-fluid animate-chamo"
                         style="max-height: 550px;">
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes moveChamo {
            0% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-10px) scale(1.1); }
            100% { transform: translateY(0) scale(1); }
        }
        .animate-chamo {
            animation: moveChamo 2s ease-in-out infinite;
        }

        @keyframes whatsappPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        .animate-whatsapp {
            animation: whatsappPulse 1.5s infinite ease-in-out;
        }

        .click-here-tag {
            animation: floatLabel 1.5s ease-in-out infinite;
        }
        @keyframes floatLabel {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
    </style>
@endsection