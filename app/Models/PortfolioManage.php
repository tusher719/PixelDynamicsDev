<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioManage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(PortfolioCategory::class,'category_id','id');
    }

    public function subcategory(){
        return $this->belongsTo(PortfolioSubCategory::class,'subcategory_id','id');
    }
}
