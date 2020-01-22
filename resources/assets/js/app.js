
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

//Vue.component('uploader', require('./components/Uploader.vue'));

const app = new Vue({
    el: '#app',
    data:{
        imageData: []
    },
    methods:{
        previewImage: function(event) {

            var input = event.target;
            if(input.files){
                var filesAmount = input.files.length;

                for (i = 0; i<filesAmount;i++){
                    var reader = new FileReader();

                    reader.onload = (e) =>{
                        this.imageData.push(e.target.result);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
    }
});
