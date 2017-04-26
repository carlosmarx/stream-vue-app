<template>
  <div class="message">
    
    <div class="message-header">
      Push to the Stream...
    </div>

    <div class="message-body">
      <form @submit.prevent="onSubmit">
            <div class="field">
              <label class="label">Message</label>
              <p class="control">
                <textarea class="textarea" placeholder="My status here..." v-model="form.body"></textarea>
                <span class="help is-danger" 
                v-if="form.errors.has('body')"
                v-text="form.errors.get('body')">
                  
                </span>
              </p>
            </div>

            <div class="filed">
              <button class="button is-primary"
              :disabled="form.errors.any()" 
              @click.prevent="onSubmit">
                Join Us!
                </button>
            </div>
      </form>
    </div>

  </div>
</template>

<script>
  export default {
    data() {
      return {
        form: new Form({
          body: ''
        })
      }
    },
    methods: {
      onSubmit() {
        this.form.post('/statuses')
        .then(status => this.$emit('completed', status));
        // $emit is to send data to parent Home.vue

      }
    }
  }
</script>