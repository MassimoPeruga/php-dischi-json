const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],
        };
    },
    methods: {
        callServer() {
            axios.get('server.php').then((response) => {
                this.dischi = response.data;
            });
        },
    },
    created() {
        this.callServer();
    }
}).mount('#app');