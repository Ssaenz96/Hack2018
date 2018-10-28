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
		},
		
		setButton(event){
			if(event.setButtonStatus) {
				this.titleToast = "Exito!";
				this.bodyToast = event.mensaje;
			} else {
				this.titleToast = "Error";
				this.bodyToast = event.mensaje;
				console.log(this.bodyToast);
			};
			this.displayNotification();
			this.addButton = false;
		},

		displayNotification() {
			this.$snotify.simple(this.bodyToast, {
				timeout: 5000,
				showProgressBar: false,
				closeOnClick: true,
				pauseOnHover: true
			  });
		  }
    }
}