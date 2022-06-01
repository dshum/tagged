<template>
  <div class="w-full py-2 px-4 2xl:px-12">
    <transition name="fade-empty">
      <div v-show="showEmpty" class="inline-block py-2 px-4 rounded-lg bg-gray-600 text-white">
        No notes were found <span v-if="tag">for tag {{ tag }}</span>
      </div>
    </transition>

    <transition name="fade">
      <div v-show="notes.length" ref="scrolling" class="cards grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-6 gap-4 min-w-64">
        <Card v-for="note in notes" :note="note" @click="openNote(note)" />
      </div>
    </transition>

    <transition name="fade">
      <div v-show="showBlock" @click.self="closeNote(activeNote)" class="fixed z-10 top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex justify-center transition duration-300">
        <div class="fixed z-20 top-48 w-1/3">
          <Card :note="activeNote" :active="true" />
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
import Card from './Card'

export default {
  components: {
    Card
  },
  props: {
    tag: String
  },
  data() {
    return {
      notes: [],
      activeNote: {},
      stopScroll: false,
      showBlock: false,
      showEmpty: false
    };
  },
  watch: {
    tag(newTag, oldTag) {
      if (newTag !== oldTag) {
        this.notes = [];
        this.showEmpty = false;
        this.stopScroll = false;
        this.loadNotes();
      }
    }
  },
  created() {
    this.loadNotes();
  },
  mounted() {
    window.addEventListener("scroll", this.handleScroll)
  },
  methods: {
    loadNotes() {
      axios
          .get('/api/notes', {
            params: {
              tag: this.tag,
              skip: this.notes.length,
              take: 6
            }
          })
          .then(this.sleeper(300))
          .then(response => this.updateNotes(response))
          .catch(error => console.log(error));
    },
    updateNotes(response) {
      let notesLength = this.notes.length;

      this.notes.push(...response.data)

      if (notesLength === this.notes.length) {
        this.stopScroll = true;
      } else {
        this.handleScroll();
      }

      this.showEmpty = ! this.notes.length;
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
    },
    sleeper(ms) {
      return function (x) {
        return new Promise(resolve => setTimeout(() => resolve(x), ms));
      };
    }
  }
}
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

.fade-empty-enter-active {
  transition: opacity 0.9s ease;
}

.fade-empty-leave-active {
  transition: opacity 0s ease;
}

.fade-empty-enter-from,
.fade-empty-leave-to {
  opacity: 0;
}
</style>
