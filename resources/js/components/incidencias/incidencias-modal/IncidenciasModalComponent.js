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
                tipo: ''
            }
        }
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
            console.log(this.incidencia);
        }
    }
}