<template>
    <div class="card-movie">
        <img class="card-movie__image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWPcBYzf3x5iMzU-HvziAwbBWbrmTAxh5k8ErcNQSQisj73lc0" alt="movie image" />
        <div class="card-movie__container">
            <p class="fs-5 mb-2">Misión imposible III</p>
            <span class="bg-primary p-1 px-2 rounded">Action</span>
            <div class="mt-2">
                <star-solid></star-solid>
                <star-solid></star-solid>
                <star-solid></star-solid>
                <star-solid></star-solid>
                <star-regular></star-regular>
                {{ stars }} / 5
            </div>
            <p>2006-05-04</p>
            <div class="mt-3">
                <strong>Synopsis</strong>
                <p>La película empieza con Ethan Hunt (Tom Cruise) esposado en una silla y al frente de él se encuentra Julia (Michelle Monaghan) también esposada y con la boca tapada...</p>
            </div>
        </div>
        <!--
        <p>{{ movie.image }}</p>
        <p>{{ movie.video }}</p>
        <p>{{ movie.title }}</p>
        <p>{{ movie.synopsis }}</p>
        <p>{{ movie.premiere_date }}</p>
        <p>{{ movie.category.name }}</p>
        <div v-for="(review, index) in movie.stars" :key="index">
            <p>{{ review.points }}</p>
        </div>
        -->
    </div>
</template>

<script>
import StarSolid from '../svg/StarSolid.vue'
import StarRegular from '../svg/StarRegular.vue'

export default {
    props: ['movie'],
    data() {
        return {
            stars: 4
        } 
    },
    components: {
        StarSolid,
        StarRegular
    }
}
</script>