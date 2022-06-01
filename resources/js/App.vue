<template>
  <div>
    <Navigation />

    <div class="flex mt-4 w-full space-x-4">
      <div v-show="showMobileMenu" class="md:w-96 hidden md:block mobile-menu py-2 pl-0 pr-8 text-sm text-gray-700 font-medium">
        <ul>
          <li v-for="tag in tags">
            <router-link :to="{name: 'tag', params: {tag: tag.name}}">
              <Tag :tag="tag" :active="tag.name === $route.params.tag" />
            </router-link>
          </li>
        </ul>
      </div>

      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Navigation from './components/Nav'
import Tag from './components/Tag'

export default {
  components: {
    Navigation,
    Tag
  },
  data() {
    return {
      showMobileMenu: true,
      tags: []
    };
  },
  created() {
    this.loadTags()
  },
  methods: {
    loadTags() {
      axios
          .get('/api/tags')
          .then(response => this.tags = response.data)
          .catch(error => console.log(error));
    }
  }
}
</script>
