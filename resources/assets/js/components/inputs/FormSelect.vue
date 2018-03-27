<template>
    <div class="form-group">
        <label :for="name">{{ label }}</label>
        <select class="form-control" :name="name" @change="input" v-bind="$attrs">
            <option v-for="(label, value) in options" :key="value" :value="value" 
                :selected="selected == value">
                {{ label }}
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
        options: Object,
        selected: String
    },
    mounted() {
        this.$emit('input', this.selected)
    }
}
</script>
