<template>
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-body">
            <post-header :post="post"/>
            <div class="content">
              <p v-text="post.body"></p>
            </div>
            <footer>
              <div class="tags">
                <tag-link :tag="post.tag"/>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    props : ['slug'],
    data() {
       return {
         post : {
           tag : {}
         }
       }
    },
    mounted() {
      axios.get(`/api/post/${this.slug}`)
          .then( res => {
            this.post = res.data;
          })
          .catch( err => {
            console.log(err.data.data);
          });
    }
  }
</script>
