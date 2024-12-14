import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import "./admin-lte/jquery.min";
import "./admin-lte/bootstrap.bundle.min";
import "./admin-lte/adminlte.min";
