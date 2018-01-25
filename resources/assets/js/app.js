
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
import './bootstrap';
import router from "./routes";

import Vue from "vue";
import VueRouter from 'vue-router';


import Buefy from "buefy";
import "buefy/lib/buefy.css";

window.Vue = Vue;
window.Vue.use(Buefy);
window.Vue.use(VueRouter);




new Vue({
    el: '#app',
    router,
});



