const { createApp } = Vue;

createApp({
    data() {
        return {
            ciao: 'ciao!',
            apiUrl: './server.php',
            newTask: [],
        }
    },
    crated() {
        axios.get(this.apiUrl).then((results) => {
            console.log(results.data)
        })
    }
}).mount('#app')