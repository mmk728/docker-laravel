var data = { a: 1 }
var vm = new Vue({
    el: '#example',
    data: data
})

vm.$data === data
vm.$el === document.getElementById('exaple')

vm.$watch('a', function (newValue, oldValue) {
    console.log('newValue:' + newValue + ' oldValue:' + oldValue)
})
