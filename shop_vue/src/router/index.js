import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'main',
            component: () => import('../views/main/Index.vue')
        },
        {
            path: '/items',
            name: 'items.index',
            component: () => import('../views/item/Index.vue')
        },
        {
            path: '/items/:id',
            name: 'items.show',
            component: () => import('../views/item/Show.vue')
        },
        {
            path: '/cart',
            name: 'cart.index',
            component: () => import('../views/cart/Index.vue')
        },
    ],
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return {top: 0}
        }
    }
})

export default router
