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
      <h3>Registro de vehiculos</h3>
      <p>Completa el formulario solicitado para agregar un nuevo elemento</p>
    </div>

    <hr>

    <form action="" autocomplete="off" id="form-registro">
      <div class="card">
        <div class="card-header" >Vehiculos</div>
        <div class="card-body">
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="placa">
            <label for="placa" class="form-label">Placa</label>
          </div>

          <div class="row g-2">
            <div class="col-md-6">
              <div class="form-floating mb-2">
                <select name="" id="marcas" class="form-select">
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
                <select name="" id="gama" class="form-select">
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
            <input type="text" class="form-control" id="modelo">
            <label for="modelo" class="form-label">Modelo</label>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-2">

              </div>
            </div>
            <div class="col-md-6">

            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
          <button class="btn btn-sm btn-outline-secondary" type="reset">Cancelar</button>
        </div>
        
      </div>
    </form>
    
  </div>
</body>
</html>