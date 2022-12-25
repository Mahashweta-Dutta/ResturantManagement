<template>
    <div class="container mt-4">
      <h1 class="text-white bg-dark text-center">View Customers</h1>
   
        <router-link to="/add-customer" class="btn btn-primary mt-3 mb-3 float-right">Add Customer</router-link>
        <table class="table table-striped table-bordered">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Contact No</th>
                <th>Action</th>
            </thead>

            <tbody>
          
                <tr v-for="eachCustomer in allCustomer" :key="eachCustomer.id">
                    <td>{{eachCustomer.customerFName}}</td>
                    <td>{{eachCustomer.customerLName}}</td>
                    <td>{{eachCustomer.customerEmailId}}</td>
                    <td>{{eachCustomer.customerContactNo}}</td>
                    <td>
                        <router-link :to="'/edit-customer/'+eachCustomer.id" class="btn btn-success btn-sm btn-rounded"><i class="fa fa-edit"></i></router-link>
                        <router-link :to="'/del-customer/'+eachCustomer.id"  class="btn btn-danger  btn-sm btn-rounded"><i class="fa fa-trash"></i></router-link>
                    </td>
                </tr>
           
            </tbody>
        </table>
    </div>
</template>


<script>
    
    export default {

        data(){
            return {
              allCustomer:{},
              form:
              {
                customerFName     : '',
                customerLName     : '',
                customerEmailId   : '',
                customerContactNo : ''
              },
            }
        },
        
        methods:{
            
            viewCustomers()
            {
                axios.get('/api/get-all-customer')
                     .then((response) => {
                        this.allCustomers = response.data
                    });
            },

        },
        created() 
        {
            this.viewCustomers();
        },
    }
</script> 