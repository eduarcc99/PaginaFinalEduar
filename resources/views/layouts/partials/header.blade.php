<!DOCTYPE html>
<html lang="es">
<head>

    <style>/* HEADER GENERAL */
        .custom-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        
        /* LOGO */
        .custom-logo img {
            height: 60px;
            transition: transform 0.3s ease;
        }
        
        .custom-logo img:hover {
            transform: scale(1.1) rotate(3deg);
        }
        
        /* MENÚ */
        .custom-menu {
            display: flex;
            align-items: center;
        }
        
        .custom-menu-btn {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            font-weight: bold;
            position: relative;
            transition: color 0.3s ease;
        }
        
        .custom-menu-btn::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            height: 3px;
            width: 0;
            background-color: #ff7c39;
            transition: width 0.3s ease;
        }
        
        .custom-menu-btn:hover {
            color: #ff7c39;
        }
        
        .custom-menu-btn:hover::after {
            width: 100%;
        }
        
        /* DROPDOWN */
        .dropdown {
            position: relative;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #444;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            overflow: hidden;
            min-width: 200px;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown-content a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            transition: background 0.3s ease;
        }
        
        .dropdown-content a:hover {
            background-color: #ff7c39;
        }
        
        /* RESPONSIVE */
        @media (max-width: 768px) {
            .custom-header {
                flex-direction: column;
                align-items: flex-start;
            }
        
            .custom-menu {
                flex-direction: column;
                width: 100%;
            }
        
            .custom-menu-btn {
                padding: 10px;
                margin: 5px 0;
                text-align: left;
                width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            .custom-logo img {
                height: 50px;
            }
        
            .custom-menu-btn {
                font-size: 16px;
            }
        }
        </style>
</head>

<body>
    <!-- Header -->
    <header class="custom-header">
        <div class="custom-logo">
            <a href="">
                <img src="{{ asset('img/logo1.png') }}" alt="Logo">
            </a>
        </div>

        <nav class="custom-menu">
            <a href="#" class="custom-menu-btn">Inicio</a>
            <a href="#" class="custom-menu-btn">Carta</a>
            <a href="{{ route('promociones.index') }}" class="custom-menu-btn">Promociones</a>
            <a href="#" class="custom-menu-btn">Delivery</a>
            <a href="" class="custom-menu-btn">Reserva</a>

            <!-- Usuario -->
            <?php if (isset($_SESSION['nombre'])): ?>
                <div class="dropdown">
                    <a href="#" class="custom-menu-btn">
                        <i class="bi bi-person"></i> <?php echo $_SESSION['nombre']; ?>
                    </a>
                    <div class="dropdown-content">
                        <a href="">Mi Perfil</a>
                        <a href="">Cerrar Sesión</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="" class="custom-menu-btn">
                    <i class="bi bi-person"></i>
                </a>
            <?php endif; ?>
        </nav>
    </header>
</body>
</html>

