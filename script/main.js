const { createApp } = Vue

    createApp({
    data() {
        return {
            toDoTitle: '',
            toDoText:'',
            toDoPriority: '',
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

        putData(){
            
        }
    }, 
    created(){
        this.getData()

    },
    }).mount('#app')