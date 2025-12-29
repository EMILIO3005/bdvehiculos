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
      <h3>Editar vehiculo</h3>
      <p>Completa el formulario solicitado para modificar un vehiculo</p>
      <a href="./index.php">Listar</a>
    </div>

    <hr>

    <form action="" autocomplete="off" id="form-editar">
      <div class="card">
        <div class="card-header" >Vehiculos</div>
        <div class="card-body">

          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="placa" required>
            <label for="placa" class="form-label">Placa</label>
          </div>

          <div class="row g-2">
            <div class="col-md-6">
              <div class="form-floating mb-2">
                <select name="" id="marca" class="form-select" required>
                  <option value="">Seleccione</option>
                  <option value="Toyota">Toyota</option>
                  <option value="Hyundai">Hyundai</option>
                  <option value="BMW">BMW</option>
                  <option value="Audi">Audi</option>
                  <option value="Nissan">Nissan</option>
                </select>
                <label for="marca" class="form-label">Marca</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-2">
                <select name="" id="gama" class="form-select" required>
                  <option value="">Seleccione</option>
                  <option value="BAJA">BAJA</option>
                  <option value="MEDIA">MEDIA</option>
                  <option value="ALTA">ALTA</option>
                </select>
                <label for="gama" class="form-label">Gama</label>
              </div>
            </div>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="modelo" required>
            <label for="modelo" class="form-label">Modelo</label>
          </div>

          <div class="row g-2">
            <div class="col-md-6">
              <div class="form-floating mb-2">
                <input type="date" class="form-control" id="fechaFabricacion" required>
                <label for="fechaFabricacion" class="form-label">Fecha de Fabricacion</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" id="color" required>
                <label for="color" class="form-label">Color</label>
              </div>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="tipo_combustible" required>
                <label for="tipo_combustible" class="form-label">Combustible</label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" id="precio" required>
                <label for="precio" class="form-label">Precio</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <button class="btn btn-sm btn-info" type="submit">Actualizar</button>
          <button class="btn btn-sm btn-outline-secondary" type="reset">Cancelar</button>
        </div>

      </div>
    </form>
    
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function(){
      let parametros = new URLSearchParams(location.search)
      let id = parametros.get('id')

      function buscarVehiculo(idbuscado){
        const datos = new FormData()
        datos.append("operacion", "buscarId")
        datos.append("id", idbuscado)


        fetch(`../../app/controllers/vehiculo.controller.php`, {
          method: 'POST',
          body: datos
        })
          .then(response => response.json())
          .then(data => {
            if (data){
              document.querySelector("#placa").value = data[0].placa
              document.querySelector("#marca").value = data[0].marca
              document.querySelector("#gama").value = data[0].gama
              document.querySelector("#modelo").value = data[0].modelo
              document.querySelector("#fechaFabricacion").value = data[0].fechaFabricacion
              document.querySelector("#color").value = data[0].color
              document.querySelector("#tipo_combustible").value = data[0].tipo_combustible
              document.querySelector("#precio").value = data[0].precio
            }
          })
          .catch(e => {
            console.error(e)
          })
      }
      
      
      document.querySelector("#form-editar").addEventListener("submit", function(event){
        event.preventDefault()

        if(confirm("¿Desea actualizar los datos?")){
          actualizarDatos()
        }
      })

      function actualizarDatos(){
        const datos = new FormData()

        datos.append("operacion", "actualizar")
        datos.append("placa", document.querySelector("#placa").value)
        datos.append("marca", document.querySelector("#marca").value)
        datos.append("gama", document.querySelector("#gama").value)
        datos.append("modelo", document.querySelector("#modelo").value)
        datos.append("fechaFabricacion", document.querySelector("#fechaFabricacion").value)
        datos.append("color", document.querySelector("#color").value)
        datos.append("tipo_combustible", document.querySelector("#tipo_combustible").value)
        datos.append("precio", document.querySelector("#precio").value)
        datos.append("id", id)
        fetch(`../../app/controllers/vehiculo.controller.php`, {
          method: 'POST',
          body: datos
        })
          .then(response => response.json())
          .then(data => {
            console.log(data)
          })
          .catch(e =>{
            console.error(e)
          })
      }
      buscarVehiculo(id)
    })
  </script>

</body>
</html>