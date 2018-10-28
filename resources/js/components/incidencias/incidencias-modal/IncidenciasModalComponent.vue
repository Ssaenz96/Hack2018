<template>
    <div class="row">
        <div class="col-md-12
                    col-sm-12
                    col-xs-12">
            <form>
                <div class="row">
                    <div class="col-md-6
                                col-sm-12
                                col-xs-12
                                mb-3">
                        <incidencias-modal-maps-component @coords="setCoords($event)"></incidencias-modal-maps-component>
                    </div>
                    <div class="col-md-6
                                col-sm-12
                                col-xs-12">
                        <div class="row">
                            <div class="col-md-12
                                        col-sm-12
                                        col-xs-12">
                                <div class="form-group">
                                    <label for="tipo">Tipo de Incidencia: </label>
                                    <select class="form-control input-sm"
                                            name="tipo"
                                            id="tipo"
                                            v-model="incidencia.tipo">
                                        <option value="">Seleccione el Tipo de la Incidencia</option>
                                        <option v-for="tipo in tipos"
                                                v-bind:value="tipo.id">
                                            {{ tipo.nombre }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12
                                        col-sm-12
                                        col-xs-12">
                                <div class="form-group">
                                    <label for="fecha">Fecha de la Incidencia: </label>
                                    <input type="date"
                                           id="fechaIncidencia"
                                           class="form-control input-sm"
                                           name="fechaIncidencia"
                                           v-model="incidencia.fecha" />
                                </div>
                            </div>
                            <div class="col-md-12
                                        col-sm-12
                                        col-xs-12">
                                <div class="form-group">
                                    <label for="descr">Descripcion</label>
                                    <textarea type="text"
                                              id="comentario"
                                              class="form-control input-sm"
                                              rows="4"
                                              cols="50" 
                                              placeholder="Descripción de la Incidencia"
                                              v-model="incidencia.comentario">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <button type="submit"
                    class="btn btn-success btn-sm"
                    @click="addIncidencia">
                Enviar
            </button>
        </div>
    </div>
</template>
<script src="./IncidenciasModalComponent.js"></script>
