import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Experience from '../views/Experience.vue'
import Portfolio from '../views/Portfolio.vue'
import Contact from '../views/Contact.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    components: {
      default: Home,
      experience: Experience,
      portfolio: Portfolio,
      contact: Contact,
    }
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
