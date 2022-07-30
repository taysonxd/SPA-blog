import Vue from 'vue';
import Router from 'vue-router';

import Home from './views/Home';
import About from './views/About';
import Contact from './views/Contact';
import Archive from './views/Archive';

import postShow from './views/PostShow';
import categoriesPosts from './views/CategoriesPosts';
import tagsPosts from './views/TagsPosts';

import Err404 from './views/404';

Vue.use(Router);

export default new Router({
  linkExactActiveClass : 'active',
  scrollBehaviour : () => { return {x : 0, y : 0} },
  mode : 'history',
  routes : [
    {
      name : 'home',
      path : '/',
      component : Home
    },
    {
      name : 'about',
      path : '/about',
      component : About
    },
    {
      name : 'contact',
      path : '/contacto',
      component : Contact
    },
    {
      name : 'archive',
      path : '/archivo',
      component : Archive
    },
    {
      name : 'postShow',
      path : '/post/:slug',
      component : postShow,
      props : true
    },
    {
      name : 'categoriesPosts',
      path : '/categories/:url',
      component : categoriesPosts,
      props : true
    },
    {
      name : 'tagPosts',
      path : '/tags/:url',
      component : tagsPosts,
      props : true
    },
    {
      path : '*',
      component : Err404
    }
  ]
});
