import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//routes
export default new VueRouter({
        routes: [
            {
                path: '/',
                name: 'home',
                component: Vue.component('Home', require('./pages/Home.vue'))
            },
            {
                path: '/posts',
                name: 'posts',
                component: Vue.component('Posts', require('./pages/Posts.vue'))
            },
            {
                path: '/posts/new',
                name: 'newpost',
                component: Vue.component('Blog', require('./pages/NewPost.vue'))
            },
            {
                path: '/posts/:id',
                name: 'post',
                component: Vue.component('Post', require('./pages/Post.vue'))
            },

        ]
    }
)