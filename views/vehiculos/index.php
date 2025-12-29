<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vehiculos</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">  
    <div>
      <h3>Mantenimiento de vehiculos</h3>
      <p>Este modulo permite el listado, eliminacion y edicion</p>
      <a href="./registrar.php">Registrar</a>
    </div>

    <hr>

    <div class="table-responsive">
      <table class="table table-sm table-striped" id="tabla-vehiculos">
        <thead>
          <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Gama</th>
            <th>Modelo</th>
            <th>Fabricacion</th>
            <th>Color</th>
            <th>Combustible</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(){
      function obtenerDatos(){
        const datos = new FormData()
        datos.append("operacion", "listar")

        fetch('../../app/controllers/vehiculo.controller.php',{
          method: 'POST',
          body: datos
        })
           .then(Response => Response.json())
           .then(data => {
             if (data){
              document.querySelector("#tabla-vehiculos tbody").innerHTML = ''
               
              data.forEach(element => {
                document.querySelector("#tabla-vehiculos tbody").innerHTML += `
                <tr>
                  <td>${element.placa}</td>
                  <td>${element.marca}</td>
                  <td>${element.gama}</td>
                  <td>${element.modelo}</td>
                  <td>${element.fechaFabricacion}</td>
                  <td>${element.color}</td>
                  <td>${element.tipo_combustible}</td>
                  <td>${element.precio}</td>
                  <td>
                    <a href='#' data-id='${element.id}' class='btn btn-sm btn-danger'>Eliminar</a>
                    <a href='#' class='btn btn-sm btn-info'>Editar</a>
                  </td>
                </tr>
                `
               });
              }
           })
           .catch(e => {
            console.error(e)
           })
      }

      const tabla = document.querySelector("#tabla-vehiculos")

      tabla.addEventListener("click", async(event)=>{

        //Verificar el elemento clikeado sea correcto
        if (event.target.classList.contains("btn-danger")){
          
          event.preventDefault()

          const idvehiculo = event.target.dataset.id
          
          if (confirm("¿Esta seguro de eliminar el registro?")){
            eliminarVehiculo(idvehiculo)
          }
        }
      })
      
      function eliminarVehiculo(idvehiculo){
        const datos = new FormData()
        datos.append("operacion", "eliminar")
        datos.append("id", idvehiculo)


        fetch(`../../app/controllers/vehiculo.controller.php`, {
          method: 'POST',
          body: datos
        })
            .then(response => response.json())
            .then(data => {
              if (data.filas > 0){
                obtenerDatos()
              }
            })
            .catch(e => {
              console.error(e)
            })
      }
      obtenerDatos()
    })
  </script>
</body>
</html>