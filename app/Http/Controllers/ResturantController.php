<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerInfoModel;

class ResturantController extends Controller
{
    public function addCustomer(Request $request)
    {
        $addCustomer = new CustomerInfoModel;

        $addCustomer->CustomerFName     =  $request->CustomerFName;  
        $addCustomer->CustomerLName     =  $request->CustomerLName; 
        $addCustomer->CustomerEmailId   =  $request->CustomerEmailId; 
        $addCustomer->CustomerContactNo =  $request->CustomerContactNo;
        $addCustomer->save();
        return array('success' => true, 'msg'=>['Customer created successfully']);
    }

    public function allCustomer()
    {
        $customer = CustomerInfoModel::get();
        return $customer;
    }

    public function editCustomer($Id)
    {
        $customer = CustomerInfoModel::where('id',$Id)->first();
        return $customer;
    }

    public function updateCustomer($Id,Request $request)
    {
        
        $editCustomer = CustomerInfoModel::where('id',$Id)->first();

        $editCustomer->customerFName     =  $request->customerFName;  
        $editCustomer->customerLName     =  $request->customerLName; 
        $editCustomer->customerEmailId   =  $request->customerEmailId; 
        $editCustomer->customerContactNo =  $request->customerContactNo;
        $editCustomer->update();

        return array('success' => true, 'msg'=>['customer updated successfully']);
    }

    public function deleteCustomer($Id)
    {
        $del = CustomerInfoModel::where('id',$Id)->delete();
        return array('success' => true, 'msg'=>['customer deleted successfully']);
    }
}