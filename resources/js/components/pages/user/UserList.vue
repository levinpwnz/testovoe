<template>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                List of users |
                <router-link to="/user/new">Add new User</router-link>
            </div>

            <div class="card-body">
                <div class="alert alert-danger" v-if="status">
                    {{ message }}
                </div>
                <table class="table table-bordered">
                    <UserItem v-for="user in users"
                              :key="user.id"
                              :user="user"
                              v-on:deleteUser="deleteUser"/>
                </table>
            </div>

        </div>
    </div>
</template>

<script>

export default {
    name: "UserList",
    data: () => {
        return {
            users: [],
            status: false,
            message: String
        }
    },

    mounted() {
        axios.get('/user/list')
            .then(response => {
                this.users = response.data.users;
            })
    },

    methods: {
        deleteUser(payload) {
            axios.post(`/user/${payload}/delete`)
                .then(response => {
                    this.message = response.data.message;
                    this.status = response.data.status === true;
                })
        }
    },
}
</script>
