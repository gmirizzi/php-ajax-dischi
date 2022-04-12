var app = new Vue({
    el: '#app',
    data: {
        arrDischi: null
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/data.php').then(res=>this.arrDischi=res.data)
    },
})