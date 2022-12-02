<template>
  <PanelItem :index="index" :field="field" />
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
  created() {
    if (this.field.addonDisplayDetail) {
      this.field.value += ' ' + this.field.addonText
    }
  }
}
</script>
