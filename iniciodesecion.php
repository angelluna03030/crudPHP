<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="vista/estilos/index.css">
  <title>login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
          
                <form  action="entrada.php" method="POST" autocomplete="off" id="miFormulario" >
                    <h2>Login</h2>
                    <?php
    if (isset($_GET['error']) && !empty($_GET['error'])) {
        echo '<p style="color: red;">Error: '.$_GET['error'].'</p>';
    }
                    ?>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required name="email" id="email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                       <span class="toggle-button" id="toggleButton"> <ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password"  required id="contrasena" name="contrasena">
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Acuérdate de mí  <a href="#">Contraseña olvidada</a></label>
                      
                    </div>
                    <button type="submit" >Entrar</button>
                    <div class="register">
                        <p>No tienes una cuenta<a href="vista/registro.php"> Registrate</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const passwordInput = document.getElementById("contraseña");
        const toggleButton = document.getElementById("toggleButton");
    
        toggleButton.addEventListener("click", () => {
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleButton.textContent = "Ocultar";
          } else {
            passwordInput.type = "password";
            toggleButton.textContent = "mostrar";
          }
        });
      </script>
</body>
</html>
