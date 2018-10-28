import IncidenciasModalMapsComponent from './incidencias-modal-maps/IncidenciasModalMapsComponent.vue'

export default {
    data() {
        return {
            tipos: [],
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