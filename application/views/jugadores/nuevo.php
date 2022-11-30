
<div class="well text-center">

	<i class="glyphicon glyphicon-plus"></i>
		 NUEVO JUGADOR


</div>
<form class="" action=" <?php echo site_url('jugadores/guardarJugador') ;?>" method="post">
	<div class="row">
		<div class="col-md-4 text-right">
			<label for="">CEDULA:</label>

		</div>
		<div class="col-md-7">
			<input type="text" name="cedula_jug" value=""
			class="form-control"
			placeholder="Ingrese el numero de cedula" required>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4 text-right">
			<label for="">APELLIDOS:</label>
	 	</div>
  	<div class="col-md-7">
			<input type="text" name="apellido_jug" value=""
			class="form-control"
			placeholder="Ingrese el APELLIDO" required>
		</div>
	</div>
<br>
	<div class="row">
		<div class="col-md-4 text-right">
			<label for="">NOMBRES:</label>
		</div>
	<div class="col-md-7">
			<input type="text" name="nombre_jug" value=""
			class="form-control"
			placeholder="Ingrese el NOMBRE" required>
	</div>
	</div>
	<br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">POSICION EN CANCHA:</label>
    </div>
  <div class="col-md-7">
      <input type="text" name="posicion_jug" value=""
      class="form-control"
      placeholder="Ingrese la posicion" required>
  </div>
  </div>
  <br>

		<div class="row">
			<div class="col-md-4 text-right">
				<label for="">TELEFONO:</label>
			</div>
			<div class="col-md-7">
				<input type="number" name="telefono_jug" value=""
				class="form-control"
				placeholder="Ingrese el TELEFONO"  required>
			</div>
		</div>
<br>

			<div class="row">
				<div class="col-md-4 text-right">
					<label for="">DIRECCION:</label>
				</div>
				<div class="col-md-7">
					<input type="text" name="direccion_jug" value=""
					class="form-control"
					placeholder="Ingrese la direccion"  required>
				</div>
			</div>
<br>
				<div class="row">
					<div class="col-md-4 text-right">
						<label for="">FECHA DE NACIMIENTO:</label>
					</div>
				<div class="col-md-7">
						<input type="date" name="fecha_nacimiento_jug" value=""
						class="form-control"
						placeholder="INGRESE LA FECHA DE NACIMIENTO"  required>
				</div>
				</div>
<br>
				<div class="row">
					<div class=" col-md-4">
					</div>

					<div class="col-md-7">
						<button type="submit" name="button" class="btn btn-primary">
						<i class="glyphicon glyphicon-ok"></i>
						Guardar
            </button>
						<a href="<?php echo site_url('jugadores/index'); ?>"
						<a href="#" class="btn btn-danger">
						<i class="glyphicon glyphicon-remove"></i>
						Cancelar
						</a>
					</div>
				</div>
			</div>

</form>
