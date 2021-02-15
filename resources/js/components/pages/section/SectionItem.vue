<template>
    <tr>
        <td>{{ section.name }}</td>
        <td>{{ section.email }}</td>
        <td>{{ section.created_at }}</td>
        <td>
            <router-link :to="`/section/${section.id}`">
                <button class="btn btn-dark">Edit</button>
            </router-link>
            <button class="btn btn-danger" @click="deleteSection(section.id)">Delete</button>
        </td>
    </tr>
</template>

<script>
export default {
    name: "SectionItem",
    props: {
        user: Object,
    },

    methods: {
        deleteSection(sectionId) {
            this.$emit('deleteSection', sectionId);
        }
    }

}
</script>
