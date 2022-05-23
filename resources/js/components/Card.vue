<template>
  <div>
    <div>
      <transition name="fade">
        <div :class="{[getCssClass(note.color)]: true, 'opacity-0': note.hide && ! active, 'shadow-lg': active, 'shadow-md hover:shadow-lg': ! active}" class="transition rounded-lg p-4">
          <h3 class="font-medium text-lg">{{ note.name }}</h3>
          <div class="max-h-128 text-ellipsis overflow-hidden py-2">
            {{ note.body }}
          </div>
          <div class="flex space-x-2 mt-2">
            <div v-for="tag in note.tags" class="backdrop-grayscale-0 bg-black/10 rounded-full px-2 py-1 text-xs font-medium text-gray-800">{{ tag.name }}</div>
          </div>
        </div>
      </transition>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    note: Object,
    active: Boolean
  },
  data() {
    return {
      allowedColors: {
        red: {name: 'Red', class: 'bg-red-300'},
        orange: {name: 'Orange', class: 'bg-orange-300'},
        yellow: {name: 'Yellow', class: 'bg-yellow-200'},
        green: {name: 'Green', class: 'bg-green-200'},
        teal: {name: 'Teal', class: 'bg-teal-200'},
        blue: {name: 'Blue', class: 'bg-blue-100'},
        'dark-blue': {name: 'Dark Blue', class: 'bg-blue-300'},
        purple: {name: 'Purple', class: 'bg-purple-300'},
        pink: {name: 'Pink', class: 'bg-pink-200'},
        brown: {name: 'Brown', class: 'bg-light-brown'},
        gray: {name: 'Gray', class: 'bg-gray-200'},
        default: {name: 'White', class: 'bg-white'},
      }
    };
  },
  watch: {
    note(val, oldVal) {
      console.log(val, oldVal)
    }
  },
  methods: {
    getCssClass(color = null) {
      if (! color) {
        color = 'default';
      }

      return this.allowedColors[color].class || '';
    }
  }
}
</script>
