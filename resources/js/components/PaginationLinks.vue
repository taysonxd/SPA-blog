<template>
  <div class="d-flex justify-content-center">
    <ul class="pagination-links">
      <li v-for="page in pagination.last_page">
        <router-link
          :class="{ 'active' : getActiveClass(page) }"
          :to="{
            name : $route.name,
            query : {
              page : page
            }
        }">
          {{ page }}
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    props : ['pagination'],
    methods : {
      getActiveClass(page) {
        return this.$route.query.page == page || ( !this.$route.query.page && page == 1 );
      }
    }
  }
</script>

<style lang="scss">

  .pagination-links {
    list-style : none;
    display: flex;
    text-decoration: none;

    li > a {
      background-color: white;
      border: 1px solid #d5cece;
      padding: 0.5rem 0.8rem;
      margin: 0 0.3rem;
      cursor: pointer;
    }
  }

  .pagination-links {
    a {
      text-decoration: none;
      color : black;
    }

    li > a.active {
      background-color : #198754;
      color : white;
    }
  }
</style>
