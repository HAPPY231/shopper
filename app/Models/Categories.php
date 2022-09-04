<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    use HasFactory;

    protected $guarder = ['id'];

    public static function tree()
    {
        $allCategories = Categories::get();

        $rootCategories = $allCategories->whereNull('parent_id');

        foreach($rootCategories as $rootCategory){
            $rootCategory->children = $allCategories->where('parent_id',$rootCategory->id)->values();

            foreach($rootCategory->children as $child){
                $child->children = $allCategories->where('parent_id',$child->id)->values();
            }
        }

        self::formatTree($rootCategories, $allCategories);

        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories)
    {
        foreach($categories as $category){
            $category->children = $allCategories->where('parent_id',$category->id)->values();

            if($category->children->isNotEmpty()){
                self::formatTree($category->children, $allCategories);
            }
        }
    }

    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }

    public function isChild(): bool
    {
        return $this->parent_id != null;
    }
}
