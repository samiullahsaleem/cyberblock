<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategory;


class AjaxController extends Controller
{
    public function getsubcategory(Request $request)
    {
        $query = $request->get('query');
        
        $data = subcategory::where('category_id', $query)->get();  
        $dat = array();
        $n = 0;


        if(count($data)!=0){
            foreach($data as $title)
            {
                $dat[$n] = '<option value='.$title->id.'>'.$title->name.'</option>';
                $n++;
            }
        
            return $dat;  
        }
        else
        {            
            $dat[$n] = "<option value=''>Please Add Subcategory</option>";          
            return $dat;
        }       
    }
}
