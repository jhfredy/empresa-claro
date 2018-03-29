<template>
	<div class="form-group">
		<label :for="name">{{ label }}</label>
		<input :type="type" class="form-control" :class="state"
			:name="name" :value="value" v-bind="$attrs" @input="input">
		<div class="invalid-feedback">{{ errorMessages[0] }}</div>
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