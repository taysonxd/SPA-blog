<template>
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-body">
            <h1 class="text-capitalize">Contact</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <hr class="divider my-4">
            <span v-if="sent" class="display-6">Tu mensaje ha sido enviado correctamente.</span>
            <form v-else @submit.prevent="submit" class="form-contact">
              <div class="row g-3">
                <div class="col-6">
                  <input v-model="form.name" class="form-control" name="name" placeholder="Tu nombre">
                </div>
                <div class="col-6">
                  <input v-model="form.email" type="email" class="form-control" name="name" placeholder="Email">
                </div>
                <div class="col-12">
                  <input v-model="form.subject" type="text" class="form-control" name="name" placeholder="Asunto">
                </div>
                <div class="col-12">
                  <textarea v-model="form.message" name="message" rows="5" cols="80" class="form-control" placeholder="Tu mensaje"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" :disabled="working" name="button" class="btn btn-outline-success">
                    <span v-if="working">ENVIANDO...</span>
                    <span v-else>ENVIAR MENSAJE</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    data() {
      return {
        sent : false,
        working : false,
        form : {
          name : 'Jack',
          email : 'Jack@correo.com',
          subject : 'A Message',
          message : 'This is a message'
        }
      }
    },
    methods : {
      submit() {
        this.working = true;

        axios.post('/api/messages', this.form)
              .then( res => {
                this.sent = true;
                this.woking = false;
              })
              .catch( err => {
                this.sent = false;
                this.working = false;
              });
      }
    }
  }
</script>
