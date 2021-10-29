<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminCategoryComponent extends Component
{
    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-category-component',['category'=>$categories])->layout('layouts.adminpanel');
    }
}
