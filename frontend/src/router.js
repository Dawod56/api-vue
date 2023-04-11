import Vue from 'vue'
import Router from 'vue-router'


Vue.use(Router)

const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About },
    { path: '/contact', component: Contact },
    { path: '*', component: NotFound }
  ]

  const router = new Router({
    routes
  })

// export default new  Router({
//     routes:[
        
//     ]
// })