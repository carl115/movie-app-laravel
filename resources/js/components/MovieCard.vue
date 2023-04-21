<template>
    <div class="card-movie" @click="openMovie">
        <img class="card-movie__image" :src="movie.image" alt="movie image" />
        <div class="card-movie__container">
            <p class="fs-5 mb-2">{{ movie.title }}</p>
            <span class="bg-primary p-1 px-2 rounded">{{ movie.category.name }}</span>
            <div class="mt-2">
                <star-solid v-for="star in starsWin"></star-solid>
                <star-regular v-for="star in starsLost"></star-regular>
                {{ starsWin }} / 5
            </div>
            <p>{{ movie.premiere_date }}</p>
            <div class="mt-3">
                <strong>Synopsis</strong>
                <p>{{ movie.synopsis }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import StarSolid from '../svg/StarSolid.vue'
import StarRegular from '../svg/StarRegular.vue'

export default {
    props: ['movie'],
    data() {
        return {
            starsWin: 0,
            starsLost: 0
        } 
    },
    components: {
        StarSolid,
        StarRegular
    },
    created() {
        this.setReview();
        this.shortSynopsis();
    },
    methods: {
        openMovie() {
            window.location.replace(`/movie/${this.movie.id}`)
        },
        setReview() {
            let starsResult = 0
            let count = 0

            for (let i = 1; i <= 5; i++) {
                let result = this.filterReview(this.movie.stars, i).length
                
                if(starsResult < result) {
                    starsResult = result
                    this.starsWin = i
                    count = i
                }
            }

            while (count < 5) {
                count++
                this.starsLost++
            }
        },
        shortSynopsis() {
            this.movie.synopsis = this.movie.synopsis.slice(0, 145) + '...';
        },
        filterReview(array, number) {
            return array.filter(obj => obj.points === number);
        }
    }
}
</script>