// Start that shit...

require('./bootstrap');
import {router} from "./router/router";

window.Vue = require('vue').default;

import Vue from 'vue'
Vue.prototype.axios = axios;

 const files = require.context('./', true, /\.vue$/i)
 files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

router.beforeEach((from, to, next) => {
    console.log(from, to)
    next();
})


const app = new Vue({
    el: '#app',
    router,
});
