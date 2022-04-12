var app = new Vue({
    el: '#app',
    data: {
        arrDischi: null,
        genres: null,
        authors: null,
        selectedFilter: "",
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/data.php').then((res) => {
            this.arrDischi = res.data
            this.genres = [...new Set(this.arrDischi.map((disco) => disco.genere))].sort();
            this.authors = [...new Set(this.arrDischi.map((disco) => disco.artista))].sort();
        });
    },
    computed: {
        filter() {
            if (this.selectedFilter == "") {
                return this.arrDischi;
            } else {
                return this.arrDischi.filter(
                    (song) =>
                        song.genere.toLowerCase() == this.selectedFilter ||
                        song.artista.toLowerCase() == this.selectedFilter
                );
            }
        },
    }
})