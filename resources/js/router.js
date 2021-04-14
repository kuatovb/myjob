import Router from 'vue-router';
import i18n from './i18n';

import DefaultLayout from "./components/home/layout/Default";
import IndexPage from "./components/home/Index";
import NotFoundPage from "./components/NotFound";

export default new Router({
    routes: [
        {
            path: '/',
            redirect: `/${i18n.locale}`
        },
        {
            path: '/:lang',
            component: DefaultLayout,
            children: [
                {
                    path: '/',
                    name: 'index',
                    component: IndexPage,
                    meta: {title: 'App' }
                },
                {
                    path: '*',
                    name: 'NotFound',
                    component: NotFoundPage,
                    meta: {title: 'Not Found' }
                }
            ]
        }
    ],
    
    mode: 'history', 
    base: '/',
    fallback: false
})