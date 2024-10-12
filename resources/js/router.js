import {createRouter, createWebHistory} from 'vue-router';


const routes = [
    {   path: '/laravel/lara_10/public/',
        component: () => import('./components/HomeComponent.vue'), name:'home'
    },
    {   path: '/laravel/lara_10/public/workers/all',
        component:() => import('./components/WorkersComponent.vue'), name: 'all'
    },
    {   path: '/laravel/lara_10/public/test',
        component:() => import('./components/FullTest.vue'), name: 'test'
    },
    {   path: '/laravel/lara_10/public/workers/:id',
        component:() => import('./components/ShowComponent.vue'), name: 'show'
    },
    {   path: '/laravel/lara_10/public/workers/:id/edit',
        component:() => import('./components/UpdateWorkerComponent.vue'), name: 'update'
    },
    {   path: '/laravel/lara_10/public/workers/add',
        component:() => import('./components/CreateWorkerComponent.vue'), name: 'create'
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
