<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    use HasFactory;
    protected $table ='sliders';
     public $fillable = ['slider_title', 'slider_description', 'slider_status'];
    static public function getSingle($id)
    {
        return SliderModel::find($id);
    }

    static public function getRecord()
    {
       $getSlider = SliderModel::latest()->get();

       return $getSlider;
    }

static public function getSliderMenu(){
        return  SliderModel::select('sliders.*')
                    ->where('slider_status', '=','Publish')
                    ->orderBy('sliders.id', 'desc')->get();
    }

   
}

