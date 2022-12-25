require('./bootstrap');
import { createApp } from 'vue';
import routes from './routes';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/src/sweetalert2.scss';

const crud = createApp({});
crud.use(routes).mount('#crud');
crud.use(VueSweetalert2);
