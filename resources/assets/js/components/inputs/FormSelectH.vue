<template>
  <div class="form-group row">
    <label :for="name" class="col-form-label col-md-2">{{ label }}</label>
    <div class="col-md-10">
      <select class="form-control" :name="name" @change="input" v-bind="$attrs">
        <option v-for="option in options" :key="option.value" :value="option.value" 
            :selected="selected == value">
            {{ option.text }}
        </option>
      </select>
    </div>
  </div>
</template>
<script>
import InputField from "../../mixins/InputField";
export default {
  mixins: [InputField],
  props: {
    label: String,
    options: Array,
    selected: String
  },
  mounted() {
    this.$emit("input", this.selected);
  }
};
</script>