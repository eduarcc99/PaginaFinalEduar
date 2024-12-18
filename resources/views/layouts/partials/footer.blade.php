<footer class="bg-custom text-light py-5">
    <div class="container">
        <div class="row">
            {{-- Logo y Descripción --}}
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('img/logo2.png') }}" alt="Amazonas632" class="mb-3" style="max-width: 200px;">
                <p class="text-muted small">
                    Amazonas 632 es más que un restaurante, es un hogar y lo demostramos en la calidez de nuestra atención en cada visita a esta casa.
                </p>
                <div class="social-links">
                    <a href="https://wa.me/970385862" alt="whatsapp"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384007.png" alt="whatsapp" style="max-width: 20px;" /></a>
                    <a href="https://facebook.com" alt="facebook"><img src="https://cdn-icons-png.flaticon.com/128/2175/2175193.png" alt="facebook" style="max-width: 20px;" /></a>
                    <a href="https://instagram.com" alt="instagram"><img src="https://cdn-icons-png.flaticon.com/128/3670/3670274.png" alt="instagram" style="max-width: 20px;" /></a>
                </div>
            </div>
  
            {{-- Mapa del Sitio --}}
            <div class="col-lg-3 mb-4">
                <h5 class="text-white mb-4">Mapa del Sitio</h5>
                <ul class="list-unstyled text-muted">
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Inicio</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Carta</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Promociones</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Delivery</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Reserva</a></li>
                </ul>
            </div>
  
            {{-- Casa Miraflores --}}
            <div class="col-lg-3 mb-4">
                <h5 class="text-white mb-4">Amazonas 632</h5>
                <ul class="list-unstyled text-muted">
                    <li class="mb-3">
                        Jr. Amazonas 632<br>
                        Chachapoyas, Amazonas, Peru
                    </li>
                    <li class="mb-3">
                        amazonas632@gmail.com
                    </li>
                    <li class="mb-3">
                        +51 970 385 862
                    </li>
                </ul>
            </div>
  
            {{-- Casa La Molina --}}
            <div class="col-lg-3 mb-4">
                <h5 class="text-white mb-4">Ubicanos</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="https://www.google.com/maps/place/Tu+Ubicacion+Aqui" target="_blank" class="text-muted">Ubicanos</a></li>
                </ul>
            </div>
        </div>
    </div>
  </footer>
  
  <style>
  
  .form-control {
  border: none;
  padding: 0.75rem;
  }
  
  .form-control:focus {
  box-shadow: none;
  border-color: rgb(241, 147, 54);
  }
  
  footer a:hover {
    color: rgb(241, 147, 54) !important;
  }
  
  .social-links a {
    font-size: 1.2rem;
    transition: color 0.3s ease;
  }
  
  .social-links a:hover {
    color: rgb(241, 147, 54) !important;
  }
  
  .bg-custom {
  background-color: rgba(0, 0, 0, 0.7) /* Color azul oscuro, puedes cambiarlo */
  }
  </style>