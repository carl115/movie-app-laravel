<template>
    <!--
    <div v-for="(movie, index) in movies" :key="index">
        <movie-card></movie-card>
    </div>
    -->
    <div class="movie-list">
        <movie-card></movie-card>
        <movie-card></movie-card>
        <movie-card></movie-card>
        <movie-card></movie-card>
        <movie-card></movie-card>
        <movie-card></movie-card>
    </div>
</template>

<script>
import MovieCard from '../components/MovieCard.vue'

export default {
    props: ['movies'],
    components: {
        MovieCard
    }
}
</script>