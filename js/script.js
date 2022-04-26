
const app = new Vue(
    {
        el: '#app',
        data: {
            musicCard : []
        },
        created(){
            // CHIAMATA AXIOS;
            axios.get('http://localhost:80/php-ajax-dischi/server/controller.php').then(
                (result) => {
                    this.musicCard = result.data.results.reverse();
                    console.log(result);
                }).catch((error) => {
                    console.warn(error);
                });
        }
    }
)