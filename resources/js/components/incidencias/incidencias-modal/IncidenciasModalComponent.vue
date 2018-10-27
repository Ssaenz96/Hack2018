<template>
    <div class="modal fade" id="modalIncidencias" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    Reportar Incidencia
                    <button type="button"
							class="close"
							data-dismiss="modal">
						&times;
					</button>
                </div>
                <div class="modal-body">
                    <div class="row"></div>
                    <div class="row">
                        <form>
                            <div class="col-md-12
                                        col-sm-6
                                        col-xs-6">
                                <div class="form-group">
                                    <label for="comentario">Comentario: </label>
                                    <input type="text"
                                        id="comentario" 
                                        class="form-control input-sm"
                                        placeholder="Comentario de la Incidencia"
                                        v-model="incidencia.comentario">
                                </div>
                            </div>
                            <div class="col-md-12
                                        col-sm-6
                                        col-xs-6">
                                <div class="form-group">
                                    <label for="tipo">Tipo de Incidencia: </label>
                                    <select name="tipo" id="tipo" v-model="incidencia.tipos">
                                        <option value="">Seleccione el Tipo de la Incidencia</option>
                                        <option v-for="tipo in tipos" v-bind:value="tipo.id">{{ tipo.nombre }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12
                                        col-sm-6
                                        col-xs-6">
                                <div class="input-group date" >
                                    <label for="fecha">Fecha de la Incidencia: </label>
                                    <input type="date" 
                                        id="fechaIncidencia"
                                        class="form-control"
                                        name="fechaIncidencia" 
                                        v-model="incidencia.fecha"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"
							class="btn btn-success btn-sm"
							@click="addIncidencia">
							Enviar
					</button>
					<button type="button"
							class="btn btn-info btn-sm"
							data-dismiss="modal">
						    Cerrar
					</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script src="./IncidenciasModalComponent.js"></script>
