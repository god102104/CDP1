import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/Applicant',
    name: 'Applicant',
    component: () =>
      import(/* webpackChunkName: "about" */ '../views/Applicant.vue'),
  },
  {
    path: '/Jobopening',
    name: 'Jobopening',
    component: () =>
      import(/* webpackChunkName: "about" */ '../views/Jobopening.vue'),
  },
  {
    path: '/Login',
    name: 'Login',
    component: () =>
      import(/* webpackChunkName: "about" */ '../views/Login.vue'),
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
});

export default router;
