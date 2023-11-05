<!DOCTYPE html> 
<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
       <meta name="viewport" content="width=device-width,
        initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" 
        content="ie=edge">
        <link rel="stylesheet" href="css/styleAlmacenes.css">
        <link rel="icon" href="img/Logo Aplicación.png"> <title>Productos</title> 
    </head>
    <body>
    <div class="principalBody">
        <div class="barraDeNavegacion">

           <a href="{{route('paquetes')}}" class="item"> Paquetes</a> 
           <a href="{{route('productos')}}" class="item"> Productos</a> 
           <a href="{{route('paquetesEnLote')}}" class="item"> Paquetes En Lote</a> 
            <div class="itemSeleccionado"> Lotes</div>
            <a  href="{{route('lotesCamion')}}" class="item"> Lotes En Camión</a>
        </div>
        <div class="container">
            <div class="cuerpo">
                <div id="contenedorTabla">
                    <x-tabla-lote-component />
                </div>
            </div>
            <div class="cajaDatos">
            <form action="{{route('redireccion.lote')}}" method="POST">
        @csrf
        <fieldset>
               <legend>Selecciona una accion:</legend>
                 <div>
                  <input type="radio" id="agregar" name="accion" value="agregar" checked />
                  <label for="agregar">Agregar</label>
                 </div>
                <div>
                 <input type="radio" id="eliminar" name="accion" value="eliminar" />
                 <label for="eliminar">Eliminar</label>
                </div>
                <div>
                 <input type="radio" id="recuperar" name="accion" value="recuperar" />
                 <label for="recuperar">Recuperar</label>
               </div >
             </fieldset>
        <div class="contenedorDatos">
         <input type="hidden" name="identificador" id="identificador">
         <button type="submit" name="aceptar">Aceptar</button>
      </div>
     </form>
       <form action="{{route('lote.cargarDatos')}}" method="GET">
         @csrf
         <button type="submit" name="cargar">Cargar Datos</button>
       </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>