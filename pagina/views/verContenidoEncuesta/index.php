<div class="col s12 m12 l12">
	<div class="card">
		<div class="card-content">
			<span class="card-title grey-text text-darken-4">Ver Encuesta  (btn ver preguntas hechas) (btn agregar una pregunta nueva) (btn modifivar encuesta)</span>
		</div>
	</div>
	<div class="card z-depth-3">
		<div class="card-content">
				<div class="row">
					<p>Crear Preguntas</p>
					<div class="row">
						<div class="input-field col s12 m12 l12">
							<input id="pregunta" type="text" class="validate">
							<label for="pregunta">Formular Pregunta</label>
						</div>
					</div>
						<p>Crear Respuesta</p>
						<div class="col s12 m12 l12">
							<!-- Switch -->
							<div class="switch">
								<label>
									Comentario
									<input id="switch_tipo_respuesta" type="checkbox">
									<span class="lever"></span>
									Selección
								</label>
								<!-- Si es comentario se deja un input y si es de seleccion se dejan varios input max 5 o 7-->
					

								<div id="respuesta_seleccion" class="col s12 m12 l12" style="display:none">
									<div class="input-field col s12 m12 l12">
										<input id="respuesta_1" type="text" class="validate">
										<label for="respuesta_1">Respuesta nº 1</label>
									</div>
									<div class="input-field col s12 m12 l12">
										<input id="respuesta_2" type="text" class="validate">
										<label for="respuesta_2">respuesta nº 2</label>
									</div>
									<div class="input-field col s12 m12 l12">
										<input id="respuesta_3" type="text" class="validate">
										<label for="respuesta_3">respuesta nº 3</label>
									</div>
									<div class="input-field col s12 m12 l12">
										<input id="respuesta_4" type="text" class="validate">
										<label for="respuesta_4">respuesta nº 4</label>
									</div>
									<div class="input-field col s12 m12 l12">
										<input id="respuesta_5" type="text" class="validate">
										<label for="respuesta_5">respuesta nº 5</label>
									</div>
									<div class="input-field col s12 m12 l12">
										<input id="respuesta_6" type="text" class="validate">
										<label for="respuesta_6">respuesta nº 6</label>
									</div>
									<div class="input-field col s12 m12 l12">
										<input id="respuesta_7" type="text" class="validate">
										<label for="respuesta_7">respuesta nº 7</label>
									</div>
								</div>

								<div id="respuesta_comentario" class="col s12 m12 l12">
									<div class="input-field col s12 m12 l12">
										<input disabled id="respuesta_comentario" type="text" class="validate">
										<label for="respuesta_comentario">Esta es una respuesta tipo comentario</label>
									</div>
								</div>

								<br>
								<div class="col s6 m6 l6">
									<a class="waves-effect waves-light btn" onclick="agregarPregunta()">Agregar esta Pregunta</a>
								</div>
								<div class="col s6 m6 l6">
									<a class="waves-effect waves-light btn orange lighten-2" onclick="volver()">Volver</a>
								</div>

								<br><br>
							</div>
						</div>
					</div>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>































					