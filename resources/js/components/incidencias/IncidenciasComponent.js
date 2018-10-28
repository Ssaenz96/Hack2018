import IncidenciasModalComponet from './incidencias-modal/IncidenciasModalComponent.vue';

export default {
	data() {
		return {
			addButton: false,
			mensaje: 'Agregar'
		}
	},
	
	components: {
		'incidencias-modal-component' : IncidenciasModalComponet
	}, 

    mounted() {
        console.log('Component mounted.')
    },

    methods: {
    	btnAgregar() {
    		this.addButton = !this.addButton;
    		if (this.addButton) {
    			this.mensaje = 'Regresar';
    		} else {
    			this.mensaje = 'Agregar';
    		}
    	}
    }
}