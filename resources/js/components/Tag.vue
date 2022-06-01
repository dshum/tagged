<template>
  <span :class="{'bg-orange-100 rounded-r-full': active, 'hover:bg-gray-100 hover:rounded-r-full': ! active}" class="flex items-center space-x-4 py-4 px-4">
    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
      <line x1="7" y1="7" x2="7.01" y2="7" />
    </svg>
    <span>{{ tag.name }}</span>
  </span>
</template>

<script>
export default {
  props: {
    tag: Object,
    active: Boolean
  },
  data() {
    return {};
  }
}
</script>
