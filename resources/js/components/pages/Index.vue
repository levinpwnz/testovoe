<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Some statistics of this service...</div>

                <div class="card-body">
                    <router-link to="/user">
                        <div class="badge badge-primary p-3">
                            All users count: {{ userCount }}
                        </div>
                    </router-link>
                    <router-link to="/section">
                        <div class="badge badge-primary p-3">
                            All sections count {{ sectionCount }}
                        </div>
                    </router-link>
                </div>
                <div class="card-footer">
                    <router-link to="/user">Users</router-link>
                    |
                    <router-link to="/section">Sections</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            userCount: 0,
            sectionCount: 0,
        }
    },
    created() {
        //Fetching users...

        axios.get('/stats')
            .then(response => {
                this.userCount = response.data.userCount;
                this.sectionCount = response.data.sectionCount;
            })
    }
}
</script>
