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
                <select name="" id="marcas" class="form-select" required>
                  <option value="">Seleccione</option>
                  <option value="Toyota">Toyota</option>
                  <option value="Hyundai">Hyundai</option>
                  <option value="BMW">BMW</option>
                  <option value="Audi">Audi</option>
                  <option value="Nissan">Nissan</option>
                </select>
                <label for="marcas" class="form-label">Marca</label>
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
</body>
</html>