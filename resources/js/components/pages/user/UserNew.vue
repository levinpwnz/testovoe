<template>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Add new user</div>

            <div class="card-body">
                <div class="form-group">
                    <input class="form-control" name="name" v-model="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input class="form-control" name="name" v-model="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" type="password" v-model="password" placeholder="Password">
                    <small>Пароль</small>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success">Добавить</button>
                </div>


            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "UserNew",
    data() {
        return {
            name: '',
            email: '',
            password: '',
            passwordConfirmation: ''
        }
    },

    methods: {
    }

}
</script>
