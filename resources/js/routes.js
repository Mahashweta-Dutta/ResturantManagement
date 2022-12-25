import {createRouter,createWebHistory} from 'vue-router';

import AddCustomer     from './components/addCustomer.vue';
import ViewAllCustomer from './components/viewAllCustomer.vue';

    const routes = [
    {
        path     : '/add-customer',
        component: AddCustomer,
        name     : "add-customer"
    },
    {
        path     : '/edit-customer/:Id',
        component: AddCustomer,
        name     : "edit-customer"
    },
    {
        path     : '/view-customer',
        component: ViewAllCustomer,
        name     : "view-customer"
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
});