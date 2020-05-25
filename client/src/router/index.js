import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
import Jobopening from '../views/Jobopening.vue';
import Applicant from '../views/Applicant.vue';
import cg_Signup from '../views/forCg/cg_Signup';
import chd_Signup from '../views/forChd/chd_Signup';
import Certificate from '../views/forCg/Certificate';

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
    path: '/cg_signup',
    name: 'cg_signup',
    component: cg_Signup,
  },
  {
    path: '/chd_signup',
    name: 'chd_signup',
    component: chd_Signup,
  },
  {
    path: '/certificate',
    name: 'certificate',
    component: Certificate,
  }
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
});

export default router;
