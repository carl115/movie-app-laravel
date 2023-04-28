<template>
    <div class="p-3 text-white">
        <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="create">
            Add User
        </button>
        <table id="usersTable" class="table text-white">
            <thead>
                <tr>
                    <th>Name</th>    
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user, index) in users" :key="index">
                    <user-field :user="user"></user-field>
                </tr>
            </tbody>
        </table>
        <user-modal></user-modal>
        <loading v-if="loading"></loading>
    </div>
</template>

<script>
import Loading from '../../../components/Loading.vue'
import UserField from '../../../components/admin/users/UserField.vue'
import UserModal from '../../../components/admin/users/Modal.vue'

export default {
    data() {
        return {
            users: [],
            loading: false
        }
    },
    components: {
        UserField,
        Loading,
        UserModal
    },
    created() {
        this.getUsers()
    },
    methods: {
        mountTable() {
            $(document).ready(function () {
                $('#usersTable').DataTable();
            });
        },
        async getUsers() {
            this.loading = true

            const res = await axios.get('/api/users')

            this.users = res.data

            this.loading = false

            this.mountTable()
        }
    }
}
</script>