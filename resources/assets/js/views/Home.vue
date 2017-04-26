<template>
    <div>
      
      <div class="columns">
        <div class="column">

          <div class="message" v-for="status in statuses">
            
            <div class="message-header">
              <p>{{ status.user.name | capitalize }} said...</p>
              <p>{{ status.created_at | ago | capitalize }}</p>
            </div>        
            
            <div class="message-body" v-text="status.body"></div>
          
          </div>

          <!-- Add to stream form -->
          <add-to-stream @completed="addStatus"></add-to-stream>
        </div>
      </div>
    
    </div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/Status';
    import AddToStream from '../components/AddToStream';


    export default {

      components: {AddToStream},


      data() {
        return {
          statuses: []
        }
      },

      filters: {
        ago(date) {
          return moment(date).fromNow();
        },

        capitalize(value) {
          return value.toUpperCase();
        }
      },

      created() {
            //fire off an ajax request
            Status.all()
            .then(({data}) => this.statuses = data);
            //OR .then(response => this.statuses = response.data);
      },

      methods: {
        addStatus(status) {
          this.statuses.unshift(status); //or push to the bottom
          alert('Your status has been saved!!');
          window.scrollTo(0,0);
        }
      }
      
    }
</script>
