import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
import Jobopening from '../views/Jobopening.vue';
import Applicant from '../views/Applicant.vue';
import Signup from '../views/Signup';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
  },
  {
    path: '/applicant',
    name: 'applicant',
    component: Applicant,
  },
  {
    path: '/jobopening',
    name: 'jobopening',
    component: Jobopening,
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
  },
  {
    path: '/signup',
    name: 'signup',
    component: Signup,
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
});

export default router;
