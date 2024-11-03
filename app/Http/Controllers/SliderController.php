<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\User;
use App\Models\SliderModel;
use HasFactory;
use Hash;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;





class SliderController extends Controller
{
    public function list(){
      $data['getRecord'] = SliderModel::getRecord();
       return view('panel.slider.list', $data);
    } 
    public function add(){
       return view('panel.slider.add');
    }

    public function insert(Request $request) {
       $slider = new SliderModel;
       $slider->slider_title = trim($request->slider_title);
       $slider->slider_description = trim($request->slider_description);
       $slider->slider_status = trim($request->slider_status);
        
        if(!empty($request->file('slider_file'))){
            $file = $request->file('slider_file');
            $randomStr = Str::random(30);
            $filename = $randomStr. '.' . $file->getClientOriginalExtension();
            $file->move('public/upload/' , $filename);
            $slider->slider_file =$filename;
        }

        
       $slider->save();

        return redirect('panel/slider')->with('success', "Slider successfully created");
    }

    
     public function edit($id){
      $data['getRecord'] = SliderModel::getSingle($id);
       return view('panel.slider.edit', $data);
    }

	public function update(Request $request, $id)
	    {    
	       $updateSlider = SliderModel::find($id);
	       $updateSlider->slider_title = trim($request->slider_title);
	       $updateSlider->slider_description = trim($request->slider_description);
	       $updateSlider->slider_status = trim($request->slider_status);     
	        if(!empty($request->file('slider_file'))){

	            if(!empty($updateSlider->slider_file) && file_exists('public/upload/' .$updateSlider->slider_file)){
	                unlink('public/upload/' .$updateSlider->slider_file);
	            }

	            $file = $request->file('slider_file');
	            $randomStr = Str::random(30);
	            $filename = $randomStr. '.' . $file->getClientOriginalExtension();
	            $file->move('public/upload/' , $filename);
	            $updateSlider->slider_file =$filename;
	        }
	       $updateSlider->save();

	        return redirect('panel/slider')->with('success', "Slider successfully created");
	    }



    public function delete($id){
       $slider = SliderModel::getSingle($id);
       $slider->delete();
       return redirect('panel/slider')->with('success', "Slider successfully deleted");
    }

}
