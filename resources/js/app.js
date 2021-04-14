/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Router from 'vue-router';
import router from './router';
import i18n from './i18n';
import App from './components/App';




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(Router);


router.beforeEach((to, from, next) => {

    // используйте язык из параметра маршрутизации или язык по умолчанию
    let language = to.params.lang;
    if (!language) {
      language = 'ru'
    }
  
    // установить текущий язык для i18n.
    i18n.locale = language
    html.setAttribute('lang', language)

    // смена заголовка сайта
    document.title = to.meta.title

    next()
  })



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router,
    i18n
});
