const { createApp } = Vue

    createApp({
    data() {
        return {
            toDos: [],
        }
    }, 
    methods: {
        getData(priorità){
            axios.get('./db/data.php', {
                params: {
                    priorità: priorità,
                    }
                })
                .then((response) => {
                    console.log(response);
                    this.toDos = response.data
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });  
        },
    }, 
    created(){
        this.getData()

    },
    }).mount('#app')