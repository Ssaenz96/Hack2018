
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import * as VueGoogleMaps from 'vue2-google-maps';
import Snotify from 'vue-snotify';
import 'vue-snotify/styles/material.css';


Vue.use(Snotify);

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyAPAxj22Xp10mrVlaXO-RgxPGrQ1HhZeTQ',
    libraries: 'places', // This is required if you use the Autocomplete plugin
    // OR: libraries: 'places,drawing'
    // OR: libraries: 'places,drawing,visualization'
    // (as you require)
 
    //// If you want to set the version, you can do so:
    // v: '3.26',
  },
 
  //// If you intend to programmatically custom event listener code
  //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
  //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
  //// you might need to turn this on.
  // autobindAllEvents: false,
 
  //// If you want to manually install components, e.g.
  //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
  //// Vue.component('GmapMarker', GmapMarker)
  //// then disable the following:
  // installComponents: true,
})
Vue.component('google', require('./components/incidencias/incidencias-modal/incidencias-modal-maps/IncidenciasModalMapsComponent.vue'))
Vue.component('incidencias-component',
    require('./components/incidencias/IncidenciasComponent.vue'));
Vue.component('incidencias-modal-component',
    require('./components/incidencias/incidencias-modal/IncidenciasModalComponent.vue'));
const app = new Vue({
    el: '#app'
});
