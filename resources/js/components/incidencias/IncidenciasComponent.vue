<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header clearfix">
                        Personal
                        <button type="button"
                                class="btn btn-success btn-sm pull-right fix-button"
                                @click="btnAgregar">
                            <i class="fas fa-plus"></i>
                            Agregar
                        </button>
                    </div>

                    <div class="card-body">
                        <div v-if="addButton">
                            <incidencias-modal-component></incidencias-modal-component>
                        </div>
                        <div v-else>
                            Mapa POWERBI
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script src="./IncidenciasComponent.js"></script>
<style src="./IncidenciasComponent.css"></style>