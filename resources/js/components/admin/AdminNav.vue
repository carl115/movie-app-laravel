<template>
    <nav :class="`nav-dashboard ${hiddeNav}`">
        <button class="nav-dashboard__logo" @click="redirect">MVS</button>
        <div class="nav-dashboard__content d-flex flex-column position-relative">
            <button class="nav-dashboard__link">
                <font-awesome-icon icon="fa-solid fa-users" />
                <span>Users</span>
            </button>
            <button class="nav-dashboard__link">
                <font-awesome-icon icon="fa-solid fa-clapperboard" />
                <span>Movies</span>
            </button>
            <button class="nav-dashboard__link">
                <font-awesome-icon icon="fa-solid fa-tags" />
                <span>Categories</span>
            </button>
            <button class="nav-dashboard__button" @click="openNav">
                <font-awesome-icon icon="fa-solid fa-arrow-left-long" v-if="!open" />
                <font-awesome-icon icon="fa-solid fa-arrow-right-long" v-if="open" />
            </button>
        </div>
    </nav>
</template>

<script>
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUsers, faClapperboard, faTags, faArrowLeftLong, faArrowRightLong } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUsers, faClapperboard, faTags, faArrowLeftLong, faArrowRightLong)

export default {
    data() {
        return {
            open: false
        }
    },
    components: {
        FontAwesomeIcon
    },
    computed: {
        hiddeNav() {
            return this.open ? 'nav-dashboard--active' : ''
        }
    },
    methods: {
        openNav() {
            this.open = !this.open
        },
        redirect() {
            window.location.replace('/')
        }
    }
}
</script>