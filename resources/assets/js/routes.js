import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//routes
export default new VueRouter({
        routes: [{
            path: '/',
            name: 'home',
            component: Vue.component('Home', require('./pages/Home.vue'))
        },
        ]
    }
)