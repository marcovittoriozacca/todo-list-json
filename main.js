const { createApp } = Vue

    createApp({
        data() {
            return {
                list: [],
                apirUrl: 'PHP/server.php',

                elementToAdd: '',
            }
        },
        mounted() {
            this.getList();
        },
        methods: {
            //effettua una chiamata al server e prende i dati della lista associandoli poi al nostro array "list"
            getList(){
                axios.get(this.apirUrl).then( (r) => this.list = r.data );
            },

            //effettua una chiamata al server passando come parametro "todoItem" e come valore la stringa contenuta in "elementToAdd"
            addElement(){
                const params = {
                    todoItem: this.elementToAdd,
                }
                axios.post(this.apirUrl, params, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }}
                ).then((r) => this.list = r.data )

                this.elementToAdd = ''
            }
        },
    }).mount('#app')
    