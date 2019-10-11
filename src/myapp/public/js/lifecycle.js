var a = new Vue({
    el: '#app',
    data: {
        a: 1
    },
    created: function () {
        console.log('created a is: ' + this.a)
    },
    mounted: function () {
        console.log('mounted a is: ' + this.a)
    },
    updated: function () {
        console.log('updated a is: ' + this.a)
    },
    destroyed: function () {
        console.log('destroyed a is: ' + this.a)
    }
})
