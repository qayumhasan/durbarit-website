
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
Vue.prototype.$eventBus = new Vue();
// using filter
Vue.filter('sortlength',function (text,length,suffix) {
    return text.substring(0,length)+suffix;
})

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.css';
Vue.use(VueIziToast);

import NProgress from 'nprogress'
import 'nprogress/nprogress.css'


axios.interceptors.request.use(function (config) {
    
    NProgress.start();
    
    return config;
  }, function (error) {
      console.log(error)
    return Promise.reject(error);
  });

  axios.interceptors.response.use(function (response) {
    NProgress.done();
    
    
    return response;
  }, function (error) {
    console.log(error)
    return Promise.reject(error);
  });






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
