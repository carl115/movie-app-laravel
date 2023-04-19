import './bootstrap';
import { createApp } from 'vue';

import MovieList from './pages/MovieList.vue'
import Navigation from './components/Nav.vue'

const app = createApp({
    components: {
        MovieList,
        Navigation
    }
});

app.mount('#app');
