<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" @click="openCloseModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Create user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="col-form-label text-black">Full name</label>
                            <input type="text" class="form-control" v-model="user.name" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label text-black">Email</label>
                            <input type="text" class="form-control" v-model="user.email" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label text-black">Password</label>
                            <input type="password" class="form-control" v-model="user.password" />
                        </div>
                        <!--
                        <div class="mb-3">
                            <label class="col-form-label text-black">Confirm password</label>
                            <input type="password" class="form-control" v-model="user.password_confirmation" />
                        </div>
                        -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="createUser">Save</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { alertSuccess } from '@/helpers/alerts'

export default {
    data() {
        return {
            user: {},
            openModal: false
        }
    },
    methods: {
        openCloseModal() {
            this.openModal = !this.openModal

            const myModalEl = document.getElementById('exampleModal')

            if(!this.openModal) {
                myModalEl.addEventListener('hidden.bs.modal', event => {
                    this.user = {}
                })
            }
        },
        async createUser() {
            const res = await axios.post('/api/users', this.user);
            console.log(res);
            alertSuccess('FUNCIONA')
        }
    }
}
</script>