<template>
	<div class="form-group" :class="state">
		<label :for="name">{{ label }}</label>
		<input :type="type" class="form-control"
			:name="name"
			:value="value" v-bind="$attrs" @input="input">
		<div class="form-control-feedback">{{ errorMessages[0] }}</div>
	</div>
</template>
<script>
import InputField from '../../mixins/InputField'
export default {
	mixins: [InputField],
	props: {
		label: String
	}
}
</script>