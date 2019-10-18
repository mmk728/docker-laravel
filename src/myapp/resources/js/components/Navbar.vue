<template>
    <nav class="navbar">
        <Router-link class="navbat__brand" to="/">
            Vue
        </Router-link>
        <div class="navbar__menu">
            <div v-if="isLogin" class="navbar__item">
                <button class="button">
                    <i class="icon ion-md-add"></i>
                    Submit a photo
                </button>
            </div>
            <span v-if="isLogin" class="navbar__item">
                {{ username }}
            </span>
            <div v-else class="nabvar__item">
                <Router-link class="button button--link" to="/login">
                    Login / Register
                </Router-link>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    computed: {
        isLogin () {
            return this.$store.getters['auth/check']
        },
        username () {
            return this.$store.getters['auth/username']
        }
    },
}
</script>
