require('./bootstrap')

import {createApp} from 'vue'
import {createRouter, createWebHashHistory} from 'vue-router'
import App from './App'
import Dashboard from './components/Dashboard'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Dashboard
    },
    {
        path: '/tags/:tag',
        name: 'tag',
        component: Dashboard,
        props: true
    },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

createApp(App)
    .use(router)
    .mount('#app')
