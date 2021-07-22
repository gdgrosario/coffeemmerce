import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        name: "Home",
        component: () => import("../pages/Home.vue"),
    },
    {
        path: "/about",
        name: "About",
        component: () => import("../pages/About.vue"),
    },
    {
        path: "/car",
        name: "Car",
        component: () => import("../pages/Car.vue"),
    },
    {
        path: "/checkout",
        name: "Checkout",
        component: () => import("../pages/Checkout.vue"),
    },
];

const router = new createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
