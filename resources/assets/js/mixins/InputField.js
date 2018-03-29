
export default {
	props: {
		name: { type: String, required: true },
		type: { type: String, default: 'text' },
		value: { type: [String, Number] },
		hasError: { type: Boolean },
		errorMessages: { 
			type: Array, 
			default() { 
				return [] 
			} 
		}
	},
	data() {
		return {
			errorClass: 'is-invalid'
		}
	},
	methods: {
		input(event) {
			this.$emit('input', event.target.value)
		},
		focus() {
			document.getElementsByName(this.name)[0].focus()
		}
	},
	computed: {
		state() {
			return { 
				[this.errorClass]: Boolean(this.hasError || this.errorMessages.length) 
			}
		}
	}
}