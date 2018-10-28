import IncidenciasModalMapsComponent from './incidencias-modal-maps/IncidenciasModalMapsComponent.vue';
import Toaster from 'v-toaster';

Vue.use(Toaster, {timeout: 5000})

export default {
    data() {
        return {
            tipos: [],
            response:{
                setButtonStatus: false,
			    mensaje: ''
            },
            incidencia: {
                latitud: '',
                longitud: '',
                comentario: '',
                fecha: '',
                tipo: ''
            }
        }
    },
    components: {
        'incidencias-modal-maps-component': IncidenciasModalMapsComponent
    },

    mounted() {
        this.getTipos();
    }, 
    created() {
        console.log('Component IncidenciasModal.');
    },
    methods: {
        getTipos:function() {
            var urlTipo = 'api/tipo';
            axios.get(urlTipo).then(response => {
                this.tipos = response.data;
            });
        },
        addIncidencia: function() {
            var urlTipo = 'api/incidencia';
            axios.post(urlTipo, this.incidencia)
                 .then((response) => {
                    console.log(response);
                    this.response.mensaje = response.data;
                    this.$emit('setButton', this.response);
                 })
                 .catch((error) => {
                     console.log(error);
                 })
        },

        setCoords(event) {
            this.incidencia.latitud = event.latitud;
            this.incidencia.longitud = event.longitud;
        }
    }
}