import VideosList from "./components/VideosList";

require('./bootstrap');

import Alpine from 'alpinejs';
import casteaching_arr from 'casteaching';
import Vue from 'vue';

window.Alpine = Alpine;
window.casteaching = casteaching_arr;
window.Vue= Vue;

window.Vue.component('videos-list', VideosList)

Alpine.start();

const app = new window.Vue({
    el: '#app',
});
