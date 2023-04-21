<template>
  <nav class="navigation">
    <slot name="logo"></slot>
    <div class="navigation__links">
      <slot name="links"></slot>
    </div>
    <div v-if="this.user">
      <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none" @click="openDropdown">
        <span class="m-0 me-2 text-decoration-none text-white">{{ user.name }}</span>
        <font-awesome-icon icon="fa-solid fa-caret-down" class="text-white" />
      </a>
      <div class="navigation__dropdown" v-if="showDropdown">
        <slot name="dropdown"></slot>
      </div>
    </div>
  </nav>
</template>

<script>
import { library } from '@fortawesome/fontawesome-svg-core'
import { faCaretDown } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faCaretDown)

export default {
  props: ['user'],
  data() {
    return {
      showDropdown: false
    }
  },
  components: {
    FontAwesomeIcon
  },
  methods: {
    openDropdown() {
      this.showDropdown = !this.showDropdown
    }
  }
}
</script>