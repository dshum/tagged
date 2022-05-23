<template>
  <div>
    <Navigation />

    <div class="flex mt-4 w-full space-x-4">
      <div v-show="showMobileMenu" class="md:w-96 hidden md:block mobile-menu py-2 pl-0 pr-8 text-sm text-gray-700 font-medium">
        <ul>
          <li class="active">
            <a href="/" class="flex items-center space-x-4 bg-orange-100 rounded-tr-full rounded-br-full py-4 px-4">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
                <line x1="7" y1="7" x2="7.01" y2="7" />
              </svg>
              <span>All</span>
            </a>
          </li>
          <li>
            <a href="/" class="flex items-center space-x-4 hover:bg-gray-100 hover:rounded-tr-full hover:rounded-br-full py-4 px-4">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
                <line x1="7" y1="7" x2="7.01" y2="7" />
              </svg>
              <span>CRM</span>
            </a>
          </li>
          <li>
            <a href="/" class="flex items-center space-x-4 hover:bg-gray-100 hover:rounded-tr-full hover:rounded-br-full py-4 px-4">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
                <line x1="7" y1="7" x2="7.01" y2="7" />
              </svg>
              <span>Books</span>
            </a>
          </li>
          <li>
            <a href="/" class="flex items-center space-x-4 hover:bg-gray-100 hover:rounded-tr-full hover:rounded-br-full py-4 px-4">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
                <line x1="7" y1="7" x2="7.01" y2="7" />
              </svg>
              <span>Phone</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="w-full py-2 px-4 2xl:px-12">
        <div ref="scrolling" class="cards grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-6 gap-4 min-w-64">
          <Card v-for="note in notes" :note="note" @click="openNote(note)" />
        </div>
      </div>
    </div>

    <transition name="fade">
      <div v-if="showBlock" @click.self="closeNote(activeNote)" class="block-ui">
        <div class="fixed z-20 top-48 w-1/3">
          <Card :note="activeNote" :active="true" />
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
import Navigation from './components/Nav'
import Card from './components/Card'

export default {
  data() {
    return {
      stopScroll: false,
      showBlock: false,
      showMobileMenu: true,
      showCards: false,
      notes: [],
      activeNote: {}
    };
  },
  components: {
    Navigation,
    Card
  },
  created() {
    this.loadNotes();
  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll)
  },
  methods: {
    loadNotes() {
      axios.get('/api/notes', {params: {skip: this.notes.length, take: 6}})
          .then(response => {
            let notesLength = this.notes.length;
            this.notes.push(...response.data)
            if (notesLength === this.notes.length) {
              this.stopScroll = true;
            } else {
              this.handleScroll();
            }
          })
          .catch(error => console.log(error));
    },
    handleScroll() {
      if (this.stopScroll) return;
      const scrollComponent = this.$refs.scrolling;
      if (scrollComponent.getBoundingClientRect().bottom < window.innerHeight) {
        this.loadNotes();
      }
    },
    openNote(note) {
      this.showBlock = true;
      note.hide = true;
      this.activeNote = note;
    },
    closeNote(note) {
      note.hide = false;
      this.activeNote = null;
      this.showBlock = false;
    }
  }
}
</script>
