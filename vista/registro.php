<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="estilos/index.css">
  <title>Registrarse</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form  action="username/store.php" method="POST" autocomplete="off" id="miFormulario">
                    <h2>Registrarse</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required name="nombre" id="nombre">
                        <label for="">Nombre</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required name="email" id="email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                       <span class="toggle-button" id="toggleButton"> <ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" id="contraseña"  required name="contrasena" >
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">

                    </div>
                    <button type="submit">Registrarse</button>
                    <div class="register">
                    <p><a href="../iniciodesecion.php"> Devolverme </a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
      const passwordInput = document.getElementById("contrasena");
        const toggleButton = document.getElementById("toggleButton");
    
        toggleButton.addEventListener("click", () => {
          if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleButton.textContent = "Ocultar";
          } else {
            passwordInput.type = "password";
            toggleButton.textContent = "Mostrar";
          }
        });
    
        // Agrega un evento para escuchar cuando se envíe el formulario
        document.getElementById("miFormulario").addEventListener("submit", function (e) {
            e.preventDefault();
    
            setTimeout(function () {
                alert("El formulario se ha enviado con éxito.");
        
                document.getElementById("miFormulario").reset();
            }, 1000);

        
            fetch("username/store.php", {
                method: "POST",
                body: new FormData(document.getElementById("miFormulario"))
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Su registro fue correcto");
                    document.getElementById("miFormulario").reset();
                } else {
                    alert("Hubo un error al enviar el registro.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
            
        });
    </script>
</body>
</html>
