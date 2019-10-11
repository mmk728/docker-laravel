var computed = new Vue({
    el: '#computed',
    data: {
        firstName: 'computedf',
        lastName: 'computedl'
    },
    computed: {
        fullName: function () {
            return this.firstName + ' ' + this.lastName
        }
    }
})
