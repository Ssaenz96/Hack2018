export default {

	data() {
		return {
			markers: [],
			currentLocation : {
				latitud: 0,
				longitud: 0
			},
			place: null,
			coords: {
				latitud: '',
				longitud: ''
			}
		}
	},

	description: 'Autocomplete Example (#164)',
	
	mounted() {
		this.geolocation();
	},

	methods: {
		setDescription(description) {
			this.description = description;
		},

		setPlace(place) {
			this.place = place;
			this.currentLocation = {
				latitud: this.place.geometry.location.lat(),
				longitud: this.place.geometry.location.lng(),
			};
			this.$emit('coords', this.currentLocation);
		},

		usePlace(place) {
			if (this.place) {
				this.markers.push({
					position: {
						lat: this.place.geometry.location.lat(),
						lng: this.place.geometry.location.lng(),
					}
				})
				this.place = null;
			}
		},

		geolocation : function() {
			navigator.geolocation.getCurrentPosition((position) => {
				this.currentLocation = {
					latitud: position.coords.latitude,
					longitud: position.coords.longitude
				};
			});
		}

	}
}
