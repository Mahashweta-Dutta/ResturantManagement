<template>
    <div>
    <div class="container mt-4">
    <h1 v-if="this.form.id !=''">Edit Customer</h1>
    <h1 v-else>Add Customer</h1>

    <form @submit.prevent="saveCustomer">
       
        <div class="row">
            <div class="col-xl-3">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" v-model="form.customerFName" class="form-control">
                </div>
            </div>

            <div class="col-xl-3">
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" v-model="form.customerLName" class="form-control">
                </div>
            </div>

            <div class="col-xl-3">
                <div class="form-group">
                    <label for="">Email ID</label>
                    <input type="text" v-model="form.customerEmailId" class="form-control">
                </div>
            </div>

            <div class="col-xl-3">
                <div class="form-group">
                    <label for="">Contact No</label>
                    <input type="text" v-model="form.customerContactNo" class="form-control">
                </div>
            </div>

            <div class="col-xl-12">