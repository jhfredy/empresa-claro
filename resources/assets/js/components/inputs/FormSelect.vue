<template>
    <div class="form-group">
        <label :for="name">{{ label }}</label>
        <select class="form-control" :name="name" @change="input" v-bind="$attrs">
            <option value="" selected></option>
            <option v-for="option in options" :key="option.value" :value="option.value">
                {{ option.text }}
            </option>
        </select>
    </div>
</template>
<script>
import InputField from '../../mixins/InputField';
export default {
    mixins: [InputField],
    props: {
        label: String,
        options: Array,
        selected: String
    },
    mounted() {
        this.$emit('input', this.selected)
    }
}
</script>
