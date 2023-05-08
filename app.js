const { createApp } = Vue

createApp({
  data() {
    return {
        tasks: null,
        api_url: 'getTask.php',
        newTask: ''
        
    }
  },
  methods: {

    add_task() {
      console.log('add a new task to the list');

      const data = {
        new_task: this.new_task
      }

      axios.post(
        'storeTask.php',
        data,
        {
          headers: { 'Content-Type': 'multipart/form-data' }
        }).then(response => {
          console.log(response);
          this.tasks = response.data
        })
        .catch(error => {
          console.error(error.message);
        })

    },
  },
  mounted(){
    axios
    .get(this.api_url)
    .then(response =>{
        console.log(response);
        this.tasks = response.data
    })
    .catch(error => {
        console.error(error.message);
    })
    }
  
}).mount('#app')