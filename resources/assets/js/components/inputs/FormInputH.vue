<template>
	<div class="form-group row" :class="state">
		<label :for="name" class="col-form-label col-md-2">{{ label }}</label>
        <div class="col-md-10">
            <input :type="type" class="form-control"
                :name="name"
                :value="value" v-bind="$attrs" @input="input">
            <div class="form-control-feedback">
                {{ errorMessages[0] }}
            </div>
        </div>
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