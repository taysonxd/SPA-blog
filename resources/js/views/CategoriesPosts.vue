<template>
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <span class="display-5">Posts con la categoria: {{ $route.params.url }}</span>
      </div>
      <div class="col-md-10">
        <post-component v-for="post in categoryPosts" :post="post" :key="post.id"/>
        <article class="card m-3" v-if="!categoryPosts.length">
          <div class="card-body">
            <h1>No hay publicaciones todavia.</h1>
          </div>
        </article>
        <pagination-links :pagination="pagination" v-if="pagination.last_page > 1"/>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    props : ['url'],
    data() {
      return {
        categoryPosts : [],
        pagination : {}
      }
    },
    mounted() {
      axios.get(`/api/categories/${this.url}`)
            .then( res => {
              this.categoryPosts = res.data.data;
              this.pagination = res.data;
              delete this.pagination.data;
            })
            .catch( err => {
              console.log(err.data);
            });
    }
  }
</script>
