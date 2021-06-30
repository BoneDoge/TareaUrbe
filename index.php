<?php 
include 'header.php';
include 'funciones.php';
?>



<main>
  <!-- Inicio Servicio -->
  <section class="container" id="servicios">
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Tipo de acción</h4>
        <p>Costo: 2$</p>
        <form class="card-content" action="resultado.php" method="post">
          <div class="input-field ">
            <input maxlength="30" required type="text" id="nombre" name="nombre" class="validate" onkeypress="return validarNombres(event)">
            <label for="nombre" >Nombre</label>
          </div>
          <div class="input-field">
            <input maxlength="30" class="validate" required type="text" id="apellido" name="apellido" onkeypress="return validarNombres(event)">
            <label for="apellido" >Apellido</label>
          </div>
          
          <div class="">
            V-
            <div class="input-field inline">
              <input maxlength="8" class="validate" required maxlength="8" type="text" id="cedula" name="cedula" onkeypress="return validarNumeros(event)">
              <label for="cedula">Cédula</label>
            </div>
          </div>

          <div class="input-field">
            <textarea class="materialize-textarea" name="direccion" id="direccion" cols="30" rows="10"></textarea>
            <label for="direccion">Dirección de su residencia...</label>
          </div>

          <div class="input-field">
    <select>
      <option value="" disabled selected>Seleccione una</option>
      <option value="1">Paypal</option>
      <option value="2">Mastercard</option>
      <option value="3">Visa</option>
    </select>
    <label>Método de Pago</label>
  </div>
  <div class="input-field" id="delivery">
    <select>
      <option value="" disabled selected>Seleccione una</option>
      <option value="store">En Fábrica</option>
      <option value="delivery">Delivery</option>
    </select>
    <label>Tipo de envío</label>
  </div>
  <br>
  <div id="costo-delivery">
    <p>Costo de delivery 1$</p>
  </div>
  <br>
  <div class="input-field">
    <select>
      <option value="" disabled selected>Seleccione una</option>
      <option value="new">Botellón Nuevo</option>
      <option value="used">Recarga</option>
    </select>
    <label>Tipo de intercambio</label>
  </div>
          <br>

          <div id="requerimiento" class="input-field"></div>
          <br>
          <div class="card-action center">
            <button type="submit" class="waves-effect waves-light btn green darken-4">Enviar</button>
          </div>
          <br>
        </form>
      </div>
    </div>
    <div class="row">
      
        <div class="col s12 m2 l2"></div>
        <div class="col s12 m8 l8">
          <h1 class="center">Servicios</h1>
          <div class="divider"></div>
          <br>

          <ul class="collapsible" data-collapsible="accordion">
            <li id="paginaWeb">
              <div class="collapsible-header flow-text">Ejecuta tu Pago</div>
              <div class="collapsible-body">
                <div class="row">
                  <div class="col s12 m2"></div>
        <div class="col s12 m8">
      <div class="card">
        <div class="card-image">
          <img src="img/botellon.png">
        </div>
        <div class="card-content">
          <p>Noricarmen abre sus puertas con el servicio de delivery para el envío de delivery hasta la puerta de tu casa</p>
        </div>
        <div class="card-action">
          <button class="btn modal-trigger" data-target="modal1">Haz tu pedido</button>

        </div>
      </div>
    </div>
    <div class="col s12 m2"></div>
  </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header flow-text">Acerca de nosotros</div>
              <div class="collapsible-body"> <p>Somos una empresa Zuliana que se dedica al tratamiento de agua para su consumo diario y a nivel empresarial, contamos con los servicios de Delivery y también con el Pick Up.</p> 
              <p>Contactanos por las siguientes redes:<ol>IG:@Noricarmen</ol><ol>Telf:0261-7480222</ol></p>
              <img src="img/purificador.jpg" alt="" class="responsive-img">
              </div>
            </li>
          </ul>
        </div>
        <div class="col s12 m2 l2"></div>

    </div> 
    
</section>
  <!-- Fin Servicio -->

  <div class="divider"></div>

<div class="">
  <div class="container" style="">
    <div class="row">
      <div class="col s12 m2 l3"></div>
      <div class="col s12 m8 l6 card z-depth-3">
      
      </div>
      <div class="col s12 m2 l3"></div>
    </div>
    
  </div>
</div>
</main>
<?php
include 'footer.php';
?>