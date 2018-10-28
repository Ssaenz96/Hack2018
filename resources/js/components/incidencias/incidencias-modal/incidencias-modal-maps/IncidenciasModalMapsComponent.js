export default {

	data() {

		return {
			markers: [],
			currentLocation : { lat : 0, lng : 0},
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
			this.coords.latitud = this.place.geometry.location.lat();
			this.coords.longitud = this.place.geometry.location.lng();
			this.$emit('coords', this.coords);
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
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
			});
		}

	}
}
