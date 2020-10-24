import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: "history",
  routes
});

export const routes = [
    {
        path: '/',
        component: require('./components/views/main/main-component').default
    },
    {
        path: '/teams',
        component: require('./components/views/teams/team').default,
        name: "teams",
    },
    {
        path: '/products',
        component: require('./components/views/products/products').default,
        name:"products"
    },
    {
        path: '/products/:id',
        component: require('./components/views/products/products-details').default

    },
    {
        path: '/career',
        component: require('./components/views/career/career').default,
        name: "career",
    },
    {
        path: '/contact-us',
        component: require('./components/views/contact/contact-us').default,
        name: "contact-us",
    },
    {
        path: '/service/:id',
        component: require('./components/views/project/project').default,
        
        
    },
    {
        path: '/page/:id',
        component: require('./components/views/pages/page').default,
        
        
    },
    {
        path: '/login',
        component: require('./components/views/auth/auth').default,
        name: "login",
    },
    {
        path: '/deshboard',
        component: require('./components/views/deshboard/deshboard').default,
        name: "deshboard",
    },
  ]

 

  
