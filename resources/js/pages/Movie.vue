<template>
    <div class="d-flex p-4 rounded" style="background: #323232; margin: 0 220px;">
        <div class="d-flex flex-column" style="width: 560px;">
            <strong class="text-white fs-4 p-2" style="background: #404040;">{{ movie.title }}</strong>
            <iframe width="560" height="315" :src="movie.video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div style="height: 280px; margin-top: 10px; overflow-y: auto;">
                <div v-for="(user, index) in users" :key="index" style="background: #404040; color: #ffffff; margin: 15px 0; padding: 10px; border-radius: 4px;">
                    <div class="d-flex">
                        <p class="me-2">{{ user.name }}</p>
                        <p class="text-secondary">{{ user.email }}</p>
                    </div>
                    <div class="d-flex">
                        <div class="me-2">
                            <star-solid v-for="star in user.review"></star-solid>
                            <star-regular v-for="star in user.lost"></star-regular>
                        </div>
                        <span>{{ user.review }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-white ps-4">
            <h3 class="fs-4">Synopsis</h3>
            <p>{{ movie.synopsis }}</p>
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
            users: [],
        }
    },
    components: {
        StarSolid,
        StarRegular
    },
    created() {
        this.getUsers();
    },
    methods: {
        getUsers() {
            this.movie.stars.forEach(e => {
                let count = 0;
                let points = 0;

                count = e.points

                while(count < 5) {
                    count++
                    points++
                }

                axios.get(`/api/users/${e.user_id}`).then(res => {
                    this.users.push(
                        {...res.data, review: e.points, lost: points}
                    )
                });
            });
        }
    }
}
</script>