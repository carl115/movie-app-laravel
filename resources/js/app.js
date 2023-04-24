import './bootstrap';
import { createApp } from 'vue';

import MovieCard from './components/MovieCard.vue'
import Movie from './pages/Movie.vue'
import Navigation from './components/Nav.vue'

import AdminNav from './components/admin/AdminNav.vue'
import AdminIndex from './pages/admin/Index.vue'
import UsersAdmin from './pages/admin/users/Index.vue'

const app = createApp({
    components: {
        MovieCard,
        Movie,
        Navigation
    }
});
app.mount('#app');

const dashboard = createApp({
    components: {
        AdminNav,
        AdminIndex,
        UsersAdmin
    }
});
dashboard.mount('#dashboard')