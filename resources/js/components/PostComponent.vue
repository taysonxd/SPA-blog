<template>
  <article class="card m-3">
    <div class="card-body">
      <post-header :post="post"/>
      <p v-text="post.body"></p>
      <footer class="d-flex justify-content-between">
        <div class="read-more">
          <post-link class="text-uppercase btn btn-success" :post="post">
            Leer mas
          </post-link>
        </div>
        <div class="tags">
          <tag-link :tag="post.tag"/>
        </div>
      </footer>
    </div>
  </article>
</template>

<script>
  export default {
    props : ['post'],
  }
</script>
