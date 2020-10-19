
require('./bootstrap');



window.Vue = require('vue');
Vue.config.productionTip = false;

Vue.filter('striphtml', function (value) {
    var div = document.createElement("div");
    div.innerHTML = value;
    var text = div.textContent || div.innerText || "";
    return text;
  });

  import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

import VueMeta from 'vue-meta'
Vue.use(VueMeta)

// using filter
Vue.filter('sortlength',function (text,length,suffix) {
    return text.substring(0,length)+suffix;
})


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
