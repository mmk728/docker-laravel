var watch = new Vue({
    el: '#watch',
    data: {
        firstName: 'watchf',
        lastName: 'watchl',
        fullName: 'watchf watchl'
    },
    watch: {
        firstName: function (val) {
            this.fullName = val + ' ' + this.lastName
        },
        lastName: function (val) {
            this.fullName = this.firstName + ' ' + val
        }
    }
})
