<template>
    <font-awesome-icon icon="fa-regular fa-star" style="color: #FFFF54;" />
</template>

<script>
import { library } from '@fortawesome/fontawesome-svg-core'
import { faStar } from '@fortawesome/free-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faStar)

export default {
    components: {
        FontAwesomeIcon
    }
}
</script>