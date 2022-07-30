<template>
  <span>
    <router-link class="h6" :to="{ name : 'categoriesPosts', params : {url : category.url } }">{{ category.url }}</router-link>
  </span>
</template>

<script>
  export default {
    props : ['category']
  }
</script>
