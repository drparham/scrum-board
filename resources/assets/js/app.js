
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component(
    'formbuilder-create-project', {
        template: '<div></div>',
        props: {
            projectId: Number,
            projectType: Number
        },
        mounted: function () {
            let type = document.getElementById('projectable_type');
            let id   = document.getElementById('projectable_id');

            id.setAttribute('value', this.projectId);
            type.setAttribute('value', this.projectType);
        }
     }
);

Vue.component(
    'formbuilder-create-sprint', {
        template: '<div></div>',
        props: {
            projectId: Number,
        },
        mounted: function () {
            let id   = document.getElementById('project_id');

            id.setAttribute('value', this.projectId);
        }
    }
);

const app = new Vue({
    el: '#app'
});