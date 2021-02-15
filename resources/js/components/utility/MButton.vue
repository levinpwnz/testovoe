<template>
    <a :href="url" class='`btn btn-${t}`'>
        <slot></slot>
    </a>
</template>

<script>
export default {
    name: "MButton",
    props: {
        url: String,
        t: String,
        id: 0,
    }
}
</script>
