<script>

export default {
    name: "App",

    data() {
        return {
            name: 'Bob'
        }
    },

    mounted() {

    },


}
</script>

<template>
    <div>
        <router-link :to="{ name: 'person.index' }" class="m-2">People</router-link>
        <router-link :to="{ name: 'person.create' }">Add</router-link>
        <router-view></router-view>
    </div>
</template>

<style scoped>

</style>
