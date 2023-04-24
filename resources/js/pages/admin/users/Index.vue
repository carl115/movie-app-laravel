<template>
    <div class="p-3 text-white">
        <table id="example" class="table text-white">
            <thead>
                <tr>
                    <th>Name</th>    
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user, index) in users" :key="index">
                    <td v-if="!isEdit">
                        {{ user.name }}
                    </td>
                    <td v-else>
                        <!--
                        <input type="text" v-model="form.user.name" />
                        -->
                    </td>
                    <td v-if="!isEdit">
                        {{ user.email }}
                    </td>
                    <td v-else>
                        <input type="text" v-model="form.user.email" />
                    </td>
                    <td class="d-flex">
                        <button class="btn btn-primary me-2" @click="update">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr v-if="!users">
                    <td>
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: ['users'],
    data() {
        return {
            isEdit: false
        }
    },
    mounted() {
        $(document).ready(function () {
            $('#example').DataTable();
        });
    },
    methods: {
        update() {
            this.isEdit = true
        }
    }
}
</script>