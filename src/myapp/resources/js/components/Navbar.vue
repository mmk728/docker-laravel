<template>
    <nav class="navbar">
        <Router-link class="navbat__brand" to="/">
            Vue
        </Router-link>
        <div class="navbar__menu">
            <div class="navbar__item">
                <button class="button">
                    <i class="icon ion-md-add"></i>
                    Submit a photo
                </button>
            </div>
            <span class="navbar__item">
                username
            </span>
            <div class="nabvar__item">
                <Router-link class="button button--link" to="/login">
                    Login / Register
                </Router-link>
            </div>
        </div>
    </nav>
</template>
