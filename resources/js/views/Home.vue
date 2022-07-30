<template>
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <post-component v-for="post in posts" :post="post" :key="post.id"/>
        <article class="card m-3" v-if="!posts.length">
          <div class="card-body">
            <h1>No hay publicaciones todavia.</h1>
          </div>
        </article>
        <pagination-links :pagination="pagination" v-if="pagination.last_page > 1" />
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    data() {
      return {
        posts : [],
        pagination : {}
      }
    },
    mounted() {
      axios.get(`/api/posts?page=${ this.$route.query.page || 1 }`)
          .then( res => {
            this.posts = res.data.data;
            this.pagination = res.data;
            delete this.pagination.data;
          })
          .catch( err => {
            console.log(err);
          });
    }
  }
</script>
