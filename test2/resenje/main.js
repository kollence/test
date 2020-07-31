import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import Show from '@/components/Show'
import Index from "@/components/Index";

Vue.use(VueRouter)
const router = new VueRouter({
  mode:'history',
  routes: [
      {
          path: "/",
          name: 'Index',
          component: Index
      },
      {
          path: '/show/:id',
          name: 'Show',
          component: Show,
      }
  ]
})
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
