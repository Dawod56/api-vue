import Vue from "vue";
import VueRouter from "vue-router";
import HomeView from "@/views/HomeView.vue";
import CartView from "@/views/CartView.vue";
import NotFound from "@/views/NotFound.vue";
import About from "@/views/AboutView.vue";
import Login from "@/views/LoginView.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "homeview",
    component: HomeView,
    meta: { title: "Home" },
  },
  {
    path: "/cart-view",
    name: "cart-view",
    component: CartView,
    meta: { title: "Your Cart" },
  },
  {
    path: "/login",
    name: "login",
    component: Login,
    meta: { title: "Login" },
  },
  {
    path: "/About",
    name: "about",
    component: About,
    meta: { title: "About" },
  },
  {
    path: "/*",
    name: "not-found",
    component: NotFound,
    meta: { title: "Page Not found" },
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
