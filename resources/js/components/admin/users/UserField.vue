<template>
    <td>
        {{ !isUpdate ? user.name : '' }}
        <input type="text" v-model="userData.name" v-if="isUpdate" />
    </td>
    <td>
        {{ !isUpdate ? user.email : '' }}
        <input type="text" v-model="userData.email" v-if="isUpdate" />
    </td>
    <td class="d-flex" v-if="!isUpdate">
        <button 
            class="btn btn-primary me-2" 
            @click="() => this.isUpdate = true"
        >Edit</button>
        <button class="btn btn-danger" @click="deleteUser">Delete</button>
    </td>
    <td class="d-flex" v-if="isUpdate">
        <button class="btn btn-success me-2" @click="updateUser">
            <font-awesome-icon icon="fa-solid fa-check" />
        </button>
        <button class="btn btn-danger" @click="cancelUpdate">
            <font-awesome-icon icon="fa-solid fa-xmark" />
        </button>
    </td>
</template>

<script>
import { alertSuccess, alertConfirm } from '../../../helpers/alerts'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faCheck, faXmark } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faCheck, faXmark)

export default {
    props: ['user'],
    data() {
        return {
            isUpdate: false,
            userData: {}
        }
    },
    components: {
        FontAwesomeIcon
    },
    created() {
        this.getUserData()
    },
    updated() {
        this.getUserData()
    },
    methods: {
        getUserData() {
            this.userData = this.user
        },
        cancelUpdate() {
            this.isUpdate = false
            this.$parent.getUsers()
        },
        async updateUser() {
            const res = await axios.put(`/api/users/${this.user.id}`, this.userData)

            alertSuccess(res.data.message)

            this.isUpdate = false
        },
        async deleteUser() {
            await alertConfirm('Are you sure to delete this user?').then(async (result) => {
                if (result.isConfirmed) {
                    await axios.delete(`/api/users/${this.user.id}`)
                    await alertSuccess('User deleted')
                    this.$parent.getUsers()
                }
            })
        }
    }
}
</script>