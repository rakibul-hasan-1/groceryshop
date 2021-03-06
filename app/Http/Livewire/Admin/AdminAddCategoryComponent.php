<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $name,$slug;
    public function generateSlug(){
        $this->slug=Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required|unique:categories,slug'
        ]);
    }

    public function storeCategory(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:categories,slug'
        ]);
        $category=new Category();
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->save();
        session()->flash('message','category has been saved successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.adminpanel');
    }
}
