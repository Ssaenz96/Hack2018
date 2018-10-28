import IncidenciasModalComponet from './incidencias-modal/IncidenciasModalComponent.vue';

export default {
	data() {
		return {
			addButton: false
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
    	}
    }
}