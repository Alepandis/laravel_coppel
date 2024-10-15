<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Asegúrate de enlazar tu archivo CSS correctamente -->
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h2>Login</h2>
            <div class="icon-placeholder">
                <img src="/images/imagen_login.png" alt="Icon Placeholder" class="icon-placeholder">
            </div>
        </div>
        <div class="right-section">
            <div class="login-box">
                <h3>Inicia sesión con tu usuario</h3>
                <form action="{{ route('login') }}" method="POST">
                @csrf 
                    <div class="input-group">
                        <label for="usernam">
                            <i class="fa fa-user"></i>
                            Usuario
                        </label>
                        <input type="text" id="email" name="email" type="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">
                            <i class="fa fa-lock"></i>
                            Contraseña
                        </label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="forgot-password">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="login-btn">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer"></div>
    </footer>
</body>
</html>