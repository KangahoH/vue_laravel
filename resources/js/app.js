/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

///initialize variable
data: ({
    newLaptop: { 'brand': '', 'model': '', 'price': '' },
    hasError: true,
    laptop: [],
});

//We use the function below to insert data into the database

createLaptop: function createLaptop() {
    var input = this.newLaptop;
    var _this = this;
    if (input['brand'] == '' || input['model'] == '' || input['price']) {
        this.hasError = false;
    } else {
        this.hasError = true;
        axios.post('/storeLaptop', input).then(function(response) {
            _this.newLaptop = { 'brand': '', 'model': '', 'price': '' }
            _this.getLaptops();
        }).catch(error => {
            console.log("Insert: " + error);
        });
    }
};

getLaptop: function getLaptop() {
    var _this = this;
    axios.get('/getLaptop').then(function(response) {
        _this.laptops = response.data;
    }).catch(error => {
        console.log("Get All: " + error);
    });
};

mounted: function mounted() {
    this.getLaptop();
};

e_id;
'',

e_brand;
'',

e_model;
'',

e_price;
'',

setVal(val_id, val_brand, val_model) {
    ()
    this.e_id = val_id;
    this.e_brand = val_brand;
    this.e_model = val_model;
    this.e_price = val_price;
};

editLaptop: function editLaptop() {
    var _this = this;
    var id_val_1 = document.getElementById('e_id');
    var brand_val_1 = document.getElementById('e_brand');
    var model_val_1 = document.getElementById('e_model');
    var price_val_1 = document.getElementById('e_price');
    var model = document.getElementById('myModal').value;
    axios.post('/editLaptop/' + id_val_1.value, { val_1: brand_val_1.value, val_2: model_val_1.value, val_3: price_val_1.value })
        .then(response => {
            _this.getLaptop();
        });
};

deleteLaptop: function deleteLaptop(laptop) {
    var _this = this;
    axios.post('/deleteLaptop/' + laptop.id).then(function(response) {
        _this.getLaptop();
    }).catch(error => {
        console.log("Delete Laptop: " + error);
    });
};