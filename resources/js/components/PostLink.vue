<template>
  <router-link :to="{ name : 'postShow', params : { slug : post.slug }}">
    <slot/>
  </router-link>
</template>

<script>
export default {
  props : ['post']
}
</script>
