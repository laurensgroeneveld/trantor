import { InertiaApp } from '@inertiajs/inertia-vue';
import Vue from 'vue';
import Layout from './views/Layout';

Vue.use(InertiaApp);

Vue.component('Layout', Layout)

const app = document.getElementById('app');

new Vue({
    render: h => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => require(`./views/${name}`).default,
        },
    }),
}).$mount(app)
