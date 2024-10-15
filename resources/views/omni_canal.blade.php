<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnicanal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/omni_canal.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluir jQuery -->
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar">
        <div class="navbar-left">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="navbar-right">
            Division Omnicanal
            <i class="fa-solid fa-table-cells-large"></i>
            <i class="fa-solid fa-right-from-bracket"></i>
        </div>
    </nav>
    
    <!-- Contenido principal -->
    <div class="main-content">
        <div class="card-container">
            <div class="card" id="audiencias-card">
                <div class="card-icon">
                    <h3><i class="fas fa-users"></i></h3>
                </div>
                <div class="card-title">Motor<br>de audiencias</div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
            // Manejar el evento de clic en la tarjeta
            $('#audiencias-card').click(function() {
                // Redirigir a la ruta de audiencias
                window.location.href = "{{ url('/audiencias') }}"; // Asegúrate de usar la ruta correcta
            });
        });
</script>
</body>
</html>