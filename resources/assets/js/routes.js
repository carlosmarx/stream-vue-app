import VueRouter from 'vue-router';

let routes = [
  {
    path: '/',
    component: require('./views/Home') //Or Home.vue
  },
  {
    path: '/about',
    component: require('./views/About') //Or Home.vue
  },
  {
    path: '/contact',
    component: require('./views/Contact') //Or Home.vue
  }
];

export default new VueRouter({
  routes,

  linkActiveClass: 'is-active'
});