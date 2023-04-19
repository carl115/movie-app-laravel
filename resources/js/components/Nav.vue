<template>
  <nav>
    <font-awesome-icon icon="fa-solid fa-user" />
  </nav>
</template>

<script>
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUser } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUser)

export default {
    components: {
        FontAwesomeIcon
    }
}
</script>