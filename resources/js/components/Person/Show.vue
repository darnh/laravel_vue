<script>
export default {
    name: "Show",

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    computed: {
        person() {
            return this.$store.getters.person
        }
    }

}
</script>

<template>
    <div v-if="person">
        <div>
            Name: {{ person.name }}
        </div>
        <div>
            Age: {{ person.age }}
        </div>
        <div>
            Job: {{ person.job }}
        </div>
        <router-link :to="{ name: 'person.edit', params: { id: this. person.id } }">Edit</router-link>

    </div>
</template>

<style scoped>

</style>
