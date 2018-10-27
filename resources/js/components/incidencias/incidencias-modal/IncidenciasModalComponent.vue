<template>
    <div class="modal fade" id="modalIncidencias" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    Reportar Incidencia
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12
                                        col-sm-12
                                        col-xs-12">
                                        <div class="form-group">
                                            <label for="descr">Descripcion</label>
                                            <input type="text" id="comentario" class="form-control input-sm"
                                                placeholder="Descripción de la Incidencia" v-model="incidencia.comentario">
                                        </div>
                                    </div>
                                    <div class="col-md-12
                                        col-sm-12
                                        col-xs-12">
                                        <div class="form-group">
                                            <label for="tipo">Tipo de Incidencia: </label>
                                            <select class="form-control input-sm" name="tipo" id="tipo" v-model="incidencia.tipo">
                                                <option value="">Seleccione el Tipo de la Incidencia</option>
                                                <option v-for="tipo in tipos" v-bind:value="tipo.id">{{ tipo.nombre }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12
                                    col-sm-12
                                    col-xs-12">
                                        <div class="form-group">
                                            <label for="fecha">Fecha de la Incidencia: </label>
                                            <input type="date" id="fechaIncidencia" class="form-control input-sm" name="fechaIncidencia"
                                                v-model="incidencia.fecha" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xs-12">

                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm" @click="addIncidencia">
                            Enviar
                        </button>
                        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script src="./IncidenciasModalComponent.js"></script>
