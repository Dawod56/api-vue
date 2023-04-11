import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/HomePage.vue'
import Login from '@/components/Login.vue'
import NotFound from "@/components/NotFound.vue";


Vue.use(Router)

const routes = [
    { path: '/', component: Home },
    { path: '/login', component: Login },
    { path: '*', component: NotFound }
  ]

  const router = new Router({
    routes
  })
  export default router;

