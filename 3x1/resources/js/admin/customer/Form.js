import AppForm from '../app-components/Form/AppForm';

Vue.component('customer-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                first_name:  '' ,
                last_name:  '' ,
                email:  '' ,
                phone:  '' ,
                password:  '' ,
                activated:  false ,
                forbidden:  false ,
                
            }
        }
    }

});