const { createApp } = Vue

createApp({
  data() {
    return {
        tasks: null,
        api_url: 'getTask.php',
        newTask: '',
        done: ''

           
           
        
    }
  },
  methods: {

    add_task() {
      console.log('add a new task to the list');

      const data = {
        new_task: this.newTask
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

     delete_task(index) {
        
  
        const data = {
            index: index
        }
  
        axios.post(
          'deleteTask.php',
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
 
    task_toggle(index){
      
        const data = {
            index: index
        }
    
        axios.post(
        'taskToggle.php',
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
    }
  },
  mounted(){
    axios
    .get(this.api_url)
    .then(response =>{
        console.log(response.data);
        this.tasks = response.data
    })
    .catch(error => {
        console.error(error.message);
    })
    }
  
}).mount('#app')