<template>
	<div class="input-group">
		<slot name="left-addons"/>
        <span class="input-group-addon" v-if="addon"> {{ addon }} </span>
        <input :type="type" :name="name" :value="value" class="form-control" 
			:class="[control, state]" 
			@input="input" v-bind="$attrs">
        <slot name="right-addons"/>
    </div>
</template>
<script>
import InputField from '../../mixins/InputField'
export default {
	mixins: [InputField],
	data() {
		return {
			errorClass: 'is-invalid'
		}
	},
	props: {
		addon: { type: String },
		control: { type: String, default: 'boxed' }
	}
}
</script>