<template>
  <div>
    <nav class="bg-white shadow-sm py-2">
      <div class="w-full px-4">
        <div class="flex justify-between">
          <div class="">
            <a href="#" class="flex items-center space-x-4">
              <svg class="h-10 w-10 bg-yellow-400 text-white rounded-md px-1 py-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
              </svg>
              <span class="font-medium text-gray-600">Tagged</span>
            </a>
          </div>

          <div class="hidden md:flex w-1/4">
            <form method="GET" class="w-full">
              <div class="relative w-full text-gray-600 focus-within:text-gray-400">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                  <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                  </button>
                </span>
                <input type="text" name="q" class="w-full py-2 pl-14 pr-4 bg-gray-100 rounded-md focus:outline-none focus:shadow-md focus:bg-white focus:text-gray-900" placeholder="Search" autocomplete="off">
              </div>
            </form>
          </div>

          <div class="hidden md:flex items-center space-x-3 text-sm">
            <a href="" class="py-2 px-2 text-gray-500 font-medium rounded hover:bg-yellow-400 hover:text-white transition duration-300">Log In</a>
            <a href="" class="py-2 px-2 text-gray-500 font-medium rounded hover:bg-yellow-400 hover:text-white transition duration-300">Sign Up</a>
          </div>

          <div class="md:hidden flex items-center">
            <button class="outline-none mobile-menu-button" @click="showMobileMenu = ! showMobileMenu">
              <svg class="w-6 h-6 text-gray-500 hover:text-orange-500"
                   fill="none"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                   stroke-width="2"
                   viewBox="0 0 24 24"
                   stroke="currentColor"
              >
                <path d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showMobileMenu: true
    };
  },
  mounted() {

  }
}
</script>
