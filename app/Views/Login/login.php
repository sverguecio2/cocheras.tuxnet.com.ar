<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cocheras </title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">


</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">

                    <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">SyS UTN</h1>

                    <P class="auth-subtitle mb-5">Sistema de Cocheras</P>

                    <form class="row g-3 needs-validation" novalidate action="/verificar" method="POST" id="form-login" autocomplete="off">



                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Usuario" name="usuario" id="usuario" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>

                            <div class="valid-feedback">
                                Se ve bien!
                            </div>
                            <div class="invalid-tooltip">
                                Por favor ingrese un nombre de usuario.
                            </div>


                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Contraseña" name="clave" id="clave" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>

                            <div class="valid-feedback">
                                Se ve bien!
                            </div>
                            <div class="invalid-tooltip">
                                Por favor ingrese una contraseña.
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Mantenerme conectado

                            </label>


                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Iniciar Sesión</button>

                    </form>




                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">¿No tienes una cuenta? <a href="/registrate" class="font-bold">Registrate</a>.</p>
                        <p><a class="font-bold" href="restablecer/clave">Olvidaste tu contraseña?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>

    <script src="assets/js/validation.js"></script>

   

</body>

</html>