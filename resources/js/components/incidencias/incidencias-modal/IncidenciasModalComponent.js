import Axios from "axios";

export default {
    data() {
        return {
            tipos: [],
            incidencia: {
                latitud: '',
                longitud: '',
                nombre: '',
                comentario: '',
                tipos: ''
            }
        }
    },
    created() {
        console.log('Component IncidenciasModal.');
    },
    methods: {
        getTipos:function() {
            var urlKeep = 'api/tipo';
            axios.get(urlKeep).then(response => {
                this.tipo = response.data;
            });
        },
        addIncidencia: function() {
            console.log(this.incidencia);
        }
    }
}