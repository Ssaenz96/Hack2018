<template>
    <div>
        <div class="row">
            <div class="form-group col-md-12 col-xs-12 col-sm-12">
                <GmapAutocomplete class="form-control"
                                  @place_changed="setPlace">
                </GmapAutocomplete>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-12 col-xs-12 col-sm-12">
                <GmapMap style="min-width: 100px; min-height: 400px;"
                         :zoom="14"
                         :center="{
                            lat:currentLocation.latitud,
                            lng:currentLocation.longitud
                        }">
                    <GmapMarker v-for="(marker, index) in markers"
                                :key="index"
                                :position="marker.position"/>

                    <GmapMarker v-if="this.place"
                                label="★"
                                :position="{
                                    lat: this.place.geometry.location.lat(),
                                    lng: this.place.geometry.location.lng(),
                                }"/>
                </GmapMap>
            </div>

        </div>
  </div>

</template>
<script src="./IncidenciasModalMapsComponent.js"></script>
