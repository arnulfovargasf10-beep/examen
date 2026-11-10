<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lista de vehiculos</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>


<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal vehiculos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
        <p> +Agregar nuevo vehiculos </p>
      </div>
      <div class="modal-footer">
      

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Actualizar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
            

    </div>
  </div>
  <tbody>
                 @forelse($vehiculos as $vehiculo)
                   <tr>
                      <td>{{$vehiculos->placa}}</td>
                      <td>{{$vehiculos->marca}}</td>
                      <td>{{$vehiculos->modelo}}</td>
                      <td>{{$vehiculos->tipo de vehiculo}}</td>
                      <td>{{$vehiculos->color}}</td>
                      <td>{{$vehiculos->capacidad}}</td>
                      <td>{{$vehiculos->tarifa diaria}}</td>
                      <td>{{$vehiculos->estado}}</td>
                   <td>
</div>
  </body>
</html>





