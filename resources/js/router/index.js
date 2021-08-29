import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    name: "Home",
    component: () =>
      import(
        /* webpackChunkName: "home", webpackPreload: true */ "../pages/Home/Home.vue"
      ),
  },
  {
    path: "/team",
    name: "Team",
    component: () =>
      import(
        /* webpackChunkName: "team", webpackPreload: true */ "../layouts/Team.vue"
      ),
  },
  {
    path: "/profile",
    name: "Profile",
    component: () =>
      import(
        /* webpackChunkName: "profile", webpackPreload: true */ "../pages/Profile/views/Profile.vue"
      ),
  },
  {
    path: "/car",
    name: "Car",
    component: () =>
      import(
        /* webpackChunkName: "car", webpackPreload: true */ "../pages/Car/views/Car.vue"
      ),
  },
  {
    path: "/checkout",
    name: "Checkout",
    component: () =>
      import(
        /* webpackChunkName: "checkout", webpackPreload: true */ "../pages/Checkout/views/Checkout.vue"
      ),
  },
  {
    path: "/profile/edit",
    name: "Edit",
    props: true,
    component: () =>
      import(
        /* webpackChunkName: "profile_edit", webpackPreload: true */ "../pages/Profile/views/Edit.vue"
      ),
  },
  {
    path: "/login",
    name: "Login",
    props: true,
    component: () =>
      import(
        /* webpackChunkName: "login", webpackPreload: true */ "../pages/Auth/views/Login.vue"
      ),
  },
  {
    path: "/sign-up",
    name: "Sign up",
    props: true,
    component: () =>
      import(
        /* webpackChunkName: "sign_up", webpackPreload: true */ "../pages/Auth/views/SignUp.vue"
      ),
  },
];

const router = new createRouter({
  scrollBehavior: () => ({ x: 0, y: 0 }),
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
