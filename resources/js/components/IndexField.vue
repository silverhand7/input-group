<template>
  <span>{{ fieldValue }} {{ field.addonDisplayIndex ? field.addonText : '' }}</span>
</template>

<script>
export default {
  props: ['resourceName', 'field'],

  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value
    },
  }
}
</script>
