<template>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Список отделов</div>
            <div class="card-body">
                <div class="section-item" v-for="section in sections" :key="section.id">
                    <div class="row">
                        <div class="col-lg-3">
                            <img class="img-thumbnail" :src="`${section.logo}`" :alt="`${section.name}`" width="250px">
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <h2>{{ section.name }}</h2>
                                <p>{{ section.description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h2>Users</h2>
                            <ol>
                                <li v-for="user in section.users">
                                    <router-link :to="`/user/${user.id}`">
                                        {{ user.name }} {{ user.admin }}
                                    </router-link>
                                </li>
                            </ol>
                        </div>
                        <div class="col-lg-3">
                            <router-link :to="`/section/${section.id}`">
                                <button class="btn btn-dark">Edit</button>
                            </router-link>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data: () => {
        return {
            sections: []
        }
    },
    created() {
        axios.get('/section/list')
            .then(response => {
                this.sections = response.data.sections;
            })
    }
}
</script>>
