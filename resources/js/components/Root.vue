<template>
    <div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <transition :name="transitionName">
                    <router-view></router-view>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Root",

    data: () => {
        return {
            transitionName: 'slide-right'
        }
    },

    watch: {
        $route(to, from) {
            const toDepth = to.path.split('/').length
            const fromDepth = from.path.split('/').length
            this.transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left'
        }
    }
}
</script>

<style scoped>

</style>
