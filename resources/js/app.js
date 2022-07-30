require('./bootstrap');

window.Vue = require('vue').default;

import router from './routes';

Vue.component('post-header', require('./components/PostHeader').default);
Vue.component('post-component', require('./components/PostComponent').default);

Vue.component('category-link', require('./components/CategoryLink').default);
Vue.component('post-link', require('./components/PostLink').default);
Vue.component('tag-link', require('./components/TagLink').default);
Vue.component('pagination-links', require('./components/PaginationLinks').default);

const app = new Vue({
    el: '#app',
    router : router
});
