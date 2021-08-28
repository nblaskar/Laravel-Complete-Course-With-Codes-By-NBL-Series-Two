window._ = require('lodash');
// Provide Bootstrap codes From Bootstrap into app.js File
import('bootstrap');



window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

