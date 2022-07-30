<template>
  <section class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-body">
            <h1 class="text-capitalize">Archive</h1>
            <p>Curabitur augue elit, molestie efficitur tempor ut, blandit sed lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et nulla eget ligula volutpat hendrerit. In eget commodo felis. Mauris ut semper sapien. Mauris aliquam sit amet quam nec faucibus. Mauris efficitur pulvinar nisi vitae auctor. Nam ultricies neque ut.</p>
            <hr class="divider my-4">
            <article class="d-flex justify-content-between">
              <div class="authors-categories">
                <h3 class="text-capitalize">authors</h3>
                <ul class="list-group list-group-flush">
                  <li v-for="author in authors" class="list-group-item py-1 border-0">
                    {{ author.author }}
                  </li>
                </ul>
                <h3 class="text-capitalize">categories</h3>
                <ul class="list-group list-group-flush">
                  <li v-for="category in categories" class="list-group-item py-1 border-0">
                    <category-link :category="category"/>
                  </li>
                </ul>
              </div>
              <div class="authors-categories">
                <h3 class="text-capitalize">latest posts</h3>
                <ul class="list-group list-group-flush">
                  <li v-for="post in posts" class="list-group-item py-1 border-0">
                    <post-link :post="post">
                      {{ post.title }}
                    </post-link>
                  </li>
                </ul>

                <h3 class="text-capitalize">posts by month</h3>
                <ul class="list-group list-group-flush">
                  <li v-for="post in archive" class="list-group-item py-1 border-0 text-capitalize">
                    {{ post.month }} {{ post.year }} ({{ post.posts }})
                  </li>
                </ul>
              </div>
            </article>
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
        authors : [],
        categories : [],
        posts : [],
        archive : []
      }
    },
    mounted() {
      axios.get('/api/archive')
            .then(res => {
              this.authors = res.data.authors;
              this.categories = res.data.categories;
              this.posts = res.data.posts;
              this.archive = res.data.archive;
            })
            .catch(err => {
              console.log(err);
            })
    }
  }
</script>
