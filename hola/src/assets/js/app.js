// app.js
new Vue({
    el: '#app',
    template: `
      <div style="background-color: black;">
        <div class="container resaltar-borde-container mt-5">
          <!-- Fila para los botones -->
          <div class="row">
            <!-- Colocar los botones en diferentes columnas -->
            <div class="col">
              <p class="resaltar-borde" style="color: whitesmoke; font-size: 25px;">Entrar a tu cuenta</p>
            </div>
            <div class="col">
              <p class="resaltar-borde" style="color: whitesmoke; font-size: 25px;">Tienda</p>
            </div>
            <div class="col">
              <span class="resaltar-borde" style="background-color: white; color: black; font-size: 25px;">Entrar/Registro</span>
            </div>
            <div class="col">
              <span class="resaltar-borde" style="background-color: rgb(177, 9, 9); color: black; font-size: 25px;">Ofertas</span>
            </div>
          </div>
  
          <!-- Otra fila para el texto principal y el formulario -->
          <div class="row resaltar-borde mt-5">
            <div class="col-7 mt-5 mb-5">
              <p style="font-size: 65px; color: white; text-align: center; font-family: 'Times New Roman', Times, serif;">
                INICIA SESIÓN <br>
                PARA VISITAR <br>
                DE NUEVO TU ESTILO <br>
              </p>
            </div>
            <div class="col-5" style="align-self: center;">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo electrónico</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label><br>
              </div>
              <p style="font-size: 15px;">
                <a href="Olvidarcontra.html" style="color: aqua;">¿Olvidaste tu contraseña?</a>
              </p>
              <button type="button" class="btn btn-primary">Ingresar</button>
              <button type="button" class="btn btn-secondary">Registrarse</button>
            </div>
          </div>
        </div>
      </div>
    `,
    mounted() {
      // Agrega cualquier lógica que necesites después de que el componente se haya montado
    }
  });
  