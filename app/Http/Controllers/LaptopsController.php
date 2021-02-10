<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopsController extends Controller
{
//    store laptop data
    public function storeLaptop(Request $request)
    {
        
        $laptops = new Laptops();
        $laptops->brand = $request->brand;
        $laptops->model = $request->model;
        $laptops->price = $request->price;
        $laptops->save();

        return $laptops;
       
    }
   // fetch laptop data

    public function getLaptop(Request $request)
    {
        
            $laptops = Laptops::all();
    
            return $laptops;
        
    }
// delete laptop data 
    public function deleteLaptop(Request $request)
    {
        
            $laptop = Laptops::find($request->id)->delete();
        
    }
//update Laptop data
    public function editLaptop(Request $request, $id)
    {
        
            $laptop = Laptops::where('id',$id)->first();
    
            $laptop->make = $request->get('val_1');
            $laptop->model = $request->get('val_2');
            $laptop->price = $request->get('val_3');
            $laptop->save();
    
            return $laptop;
        
    }
}
