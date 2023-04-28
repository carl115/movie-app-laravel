import 'bootstrap';
import 'datatables.net-bs5'

import axios from 'axios';
import jQuery from 'jquery';
import Swal from 'sweetalert2'

window.axios = axios;
window.$ = jQuery
window.Swal = Swal

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';