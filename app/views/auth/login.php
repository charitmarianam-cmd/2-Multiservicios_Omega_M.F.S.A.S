<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Multiservicios Omega M.F.S.A.S · Iniciar Sesión</title>
  <!-- Ruta correcta al archivo CSS dentro de public/asset/css/ -->
  <link rel="stylesheet" href="/asset/css/styles.css" />
</head>
<body>
  <main class="box" style="max-width: 400px; margin: 50px auto; padding: 25px; border: 1px solid #ddd; border-radius: 8px; font-family: sans-serif; background: #fff;">
    <h1 style="text-align: center; color: #333; font-size: 1.5rem;">Multiservicios Omega M.F.S.A.S</h1>
    <h2 style="text-align: center; font-size: 1.1rem; color: #666; margin-bottom: 20px;">Portal de Autenticación</h2>

    <div id="config-banner" class="banner" style="background: #fff3cd; color: #856404; padding: 10px; margin-bottom: 15px; border-radius: 4px; display: none;">
      Falta configurar <strong>asset/js/auth/config.js</strong> con tus credenciales de Supabase.
    </div>

    <p style="text-align: center; margin-bottom: 20px;">
      <button type="button" class="link-btn is-active" data-tab="login" style="padding: 8px 16px; cursor: pointer; margin-right: 5px;">Iniciar sesión</button>
      <button type="button" class="link-btn" data-tab="register" style="padding: 8px 16px; cursor: pointer;">Registrarse</button>
    </p>

    <p id="auth-message" class="message" style="text-align: center; margin-bottom: 15px;" hidden></p>

    <!-- Formulario de Inicio de Sesión -->
    <section id="panel-login">
      <form id="form-login" onsubmit="return false;">
        <label style="display: block; margin-bottom: 12px;">Correo electrónico<br />
          <input id="login-email" type="email" required style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;" placeholder="correo@omega.com" />
        </label>
        <label style="display: block; margin-bottom: 20px;">Contraseña<br />
          <input id="login-password" type="password" required minlength="6" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;" placeholder="******" />
        </label>
        <button type="submit" style="width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Entrar</button>
      </form>
    </section>

    <!-- Formulario de Registro -->
    <section id="panel-register" hidden>
      <form id="form-register" onsubmit="return false;">
        <label style="display: block; margin-bottom: 12px;">Nombre completo<br />
          <input id="register-name" type="text" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;" />
        </label>
        <label style="display: block; margin-bottom: 12px;">Correo electrónico<br />
          <input id="register-email" type="email" required style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;" placeholder="correo@omega.com" />
        </label>
        <label style="display: block; margin-bottom: 12px;">Contraseña<br />
          <input id="register-password" type="password" required minlength="6" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;" placeholder="******" />
        </label>
        <label style="display: block; margin-bottom: 20px;">Confirmar contraseña<br />
          <input id="register-password2" type="password" required minlength="6" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;" placeholder="******" />
        </label>
        <button type="submit" style="width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Crear cuenta</button>
      </form>
    </section>
  </main>

  <!-- Scripts de configuración, SDK de Supabase y lógica de autenticación -->
  <script src="/asset/js/auth/config.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
  <script src="/asset/js/auth/supabase-cliente.js"></script>
  <script src="/asset/js/auth/auth.js"></script>
</body>
</html>