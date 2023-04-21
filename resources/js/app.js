import './bootstrap';
import { createApp } from 'vue';

import MovieCard from './components/MovieCard.vue'
import Movie from './pages/Movie.vue'
import Navigation from './components/Nav.vue'

import AdminIndex from './pages/admin/Index.vue'

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
        AdminIndex
    }
});
dashboard.mount('#dashboard')