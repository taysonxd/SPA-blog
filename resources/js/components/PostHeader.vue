<template>
  <div>
    <header class="my-2 d-flex justify-content-between">
      <div class="date">
        <small v-text="post.published_date"></small> / <small v-text="post.author"></small>
      </div>
      <div class="post-category">
        <category-link class="btn-link" :category="post.category"/>
      </div>
    </header>
    <h1 class="text-capitale">{{ post.title }}</h1>
    <hr class="divider my-4">
  </div>
</template>

<script>
  export default {
    props : ['post']
  }
</script>
