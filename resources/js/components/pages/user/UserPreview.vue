<template>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">User: {{ user.email }}</div>

            <div class="card-body">
                <form ref="form">
                    <div class="form-group">
                        <input class="form-control" name="name" :value="`${user.name}`">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" :value="`${user.email}`">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="password" value="">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" @click.prevent="sendForm">Сохранить</button>
                    </div>
                    <div class="form-group">
                        <div class="alert alert-danger" v-if="errors !== ''" v-for="error in errors">
                            {{ error }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "UserPreview",
    data() {
        return {
            user: Object,
            form: null,
            errors: ''
        }
    },

    created() {
        axios.get(`/user/${this.$route.params.id}`)
            .then(response => {
                this.user = response.data.user
            })
    },

    methods: {
        sendForm() {
            let inputs = document.querySelectorAll('input');

            let form = new FormData();

            inputs.forEach(input => {
                if (input.value !== '') {
                    form.append(input.name, input.value)
                }
            })

            axios.post(`/user/${this.user.id}/update`, form)
                .then(response => {
                    this.user = response.data.user;
                    this.errors = '';
                })
                .catch(e => {
                    if (e.response.status === 422) {
                        this.errors = e.response.data.errors;
                    }
                })
        },
    }
}

</script>
