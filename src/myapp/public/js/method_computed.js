var vm = new Vue({
    el: '#app',
    data: {
        message: 'Hello!'
    },
    methods: {
        reverseMessage: function() {
            return this.message.split('').reverse().join('')
        }
    },
    computed: {
        now: function () {
            return Date.now()
        }
    }
})
