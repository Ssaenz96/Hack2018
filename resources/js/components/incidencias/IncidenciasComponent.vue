<template>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 20px;">
            <div class="col-md-12">
                <div class="card card-default" style="min-height:620px; width:90%">
                    <div class="card-header clearfix">
                        Incidencias
                        <button type="button" class="btn btn-success btn-sm pull-right fix-button" @click="btnAgregar">
                            <i class="fas fa-plus"></i>
                            {{ mensaje }}
                        </button>
                    </div>
                    <vue-snotify></vue-snotify>
                    <div class="card-body" >
                        <div v-if="addButton">
                            <incidencias-modal-component @setButton="setButton($event)"></incidencias-modal-component>
                        </div>
                        <div v-else class="embed-container">
                            <iframe src="https://app.powerbi.com/view?r=eyJrIjoiMzA5OTQ5NzktZWE4MC00YjZjLTlhZmEtYWY2NmRhODg5OGRjIiwidCI6ImNhY2E5MDExLTdiNmEtNDRkZS04NjFmLTA5NWEyY2E4ODNiNyIsImMiOjR9"
                                frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script src="./IncidenciasComponent.js"></script>
<style src="./IncidenciasComponent.css"></style>
