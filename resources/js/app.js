
require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;

// support router
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import {routes} from './routes';

Vue.component('main-component', require('./components/master-component').default);
const router = new VueRouter({
    // mode: 'history',
    routes, // short for `routes: routes`
    
})

// support vuex

import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"
const store = new Vuex.Store(
    storeData
)


const app = new Vue({
    el: '#app',
    router,
    store
});
