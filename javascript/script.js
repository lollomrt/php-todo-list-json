const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            newTask: '',
            tasks: [],
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.tasks = response.data
        })
    },
    methods: {
        pushTask() {
            const data = {
                addedTask: this.newTask
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.newTask = ''
                this.tasks = response.data
            })
        }
    }
}).mount('#app')