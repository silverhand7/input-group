<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <div class="flex -mr-px">
          <span
            v-if="field.addonPosition === 'left'"
            class="flex items-center leading-normal rounded rounded-r-none border border-r-0 border-gray-300 dark:border-gray-700 px-3 whitespace-nowrap bg-gray-100 dark:bg-gray-800 text-gray-500 text-sm font-bold"
          >
            {{ field.addonText }}
          </span>
          <input
            :id="field.attribute"
            type="text"
            class="w-full form-control form-input form-input-bordered"
            :class="[field.addonPosition === 'left' ? 'rounded-l-none' : 'rounded-r-none',  errorClasses]"
            :placeholder="field.name"
            v-model="value"
          />
          <span
            v-if="field.addonPosition === 'right'"
            class="flex items-center leading-normal rounded rounded-l-none border border-l-0 border-gray-300 dark:border-gray-700 px-3 whitespace-nowrap bg-gray-100 dark:bg-gray-800 text-gray-500 text-sm font-bold"
          >
            {{ field.addonText }}
          </span>
        </div>
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '')
    },
  },
}
</script>
