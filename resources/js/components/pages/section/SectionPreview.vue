<template>
    <div>
        {{ section.id }}
    </div>
</template>

<script>
export default {
    name: "SectionPreview",
    data: () => {
        return {
            section: null,
            mode: 'preview'
        }
    },

    created() {

    }
}
</script>
