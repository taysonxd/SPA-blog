<template>
  <span class="tag mx-1">
    <router-link
      :to="{
        name: 'tagPosts',
        params: { url: tag.url }
      }">
      #{{ tag.url }}
    </router-link>
  </span>
</template>

<script>
  export default {
    props : ['tag']
  }
</script>
