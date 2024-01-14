const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server/server.php',
            dischi: [],
            currentDisc: null,
        };
    },
    methods: {
        callServer() {
            axios.get(this.apiUrl).then((response) => {
                this.dischi = response.data;
            });
        },
        viewDetails(index) {
            axios.get(this.apiUrl, { params: { index } }).then((response) => {
                this.currentDisc = response.data;
            });
        },
    },
    created() {
        this.callServer();
    },
}).mount('#app');