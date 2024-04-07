<template>
  <div id="app">

  </div>
</template>

<script>
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

export default {
  name: 'App'
}
</script>

<style scoped>
@import './assets/css/styles.css';

body {
  /* height: 100vh; */
  /* margin: 0; Elimina el margen predeterminado del body */
  /* padding: 0; Elimina el relleno predeterminado del body */
  /* background-color: black; Establece el fondo en color negro */
}



.resaltar-borde-container {
  border: 4px solid white; /* Establecer un borde sólido de 4 píxeles con color blanco */
  padding: 15px; /* Agregar relleno opcional para separar el contenido del borde */
}
.resaltar-borde {
  border: 3px solid white;
}

#app {
  height: 100vh; /* Establece la altura del div principal al 100% del viewport height (altura de la ventana del navegador) */
  background-color: black;
}
</style>
