<template>
    <tr>
        <td>{{ user.name }}</td>
        <td>{{ user.email }}</td>
        <td>{{ user.created_at }}</td>
        <td>
            <router-link :to="`/user/${user.id}`">
                <button class="btn btn-dark">Edit</button>
            </router-link>
            <button class="btn btn-danger" @click="deleteUser(user.id)">Delete</button>
        </td>
    </tr>
</template>

<script>
export default {
    name: "UserItem",
    props: {
        user: Object,
    },

    methods: {
        deleteUser(userId) {
            this.$emit('deleteUser', userId);
        }
    }

}
</script>
