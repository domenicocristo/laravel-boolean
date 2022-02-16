require('./bootstrap');

window.Vue = require('vue');

Vue.component('postcards-component', require('./components/PostcardsComponent.vue').default);

const app = new Vue({
    el: '#app',
});