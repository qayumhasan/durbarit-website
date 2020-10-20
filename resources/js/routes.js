import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


export const routes = [
    {
        path: '/',
        component: require('./components/views/main/main-component').default
    },
    {
        path: '/teams',
        component: require('./components/views/teams/team').default
    },
    {
        path: '/products',
        component: require('./components/views/products/products').default
    },
    {
        path: '/products/:id',
        component: require('./components/views/products/products-details').default
        
    },
    {
        path: '/career',
        component: require('./components/views/career/career').default
    },
    {
        path: '/contact-us',
        component: require('./components/views/contact/contact-us').default
    },
  ]
