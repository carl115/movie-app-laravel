import 'bootstrap';
import 'datatables.net-bs5'

import axios from 'axios';
import jQuery from 'jquery';

window.axios = axios;
window.$ = jQuery

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';