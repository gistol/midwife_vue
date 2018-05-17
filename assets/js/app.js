import Vue from 'vue';
import Example from './components/Example';
import LoginForm from './components/LoginForm';
import NavMenu from './components/NavMenu';
import UserProfile from './components/UserProfile.vue'

/**
 * Create a fresh Vue Application instance
 */

new Vue({
    el: '#app',
    components: {Example, LoginForm, NavMenu, UserProfile}
});


