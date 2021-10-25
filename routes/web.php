<?php

use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\HelpComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PrivacyComponent;
use App\Http\Livewire\Product2Component;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\Single2Component;
use App\Http\Livewire\SingleComponent;
use App\Http\Livewire\TermsComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);
Route::get('/about-us',AboutusComponent::class)->name('aboutus');
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/faq',FaqComponent::class)->name('faq');
Route::get('/product',ProductComponent::class)->name('product');
Route::get('/product2',Product2Component::class)->name('product2');
Route::get('/single',SingleComponent::class)->name('single');
Route::get('/single2',Single2Component::class)->name('single2');
Route::get('/terms',TermsComponent::class)->name('terms');
Route::get('/privacy',PrivacyComponent::class)->name('privacy');
Route::get('/help',HelpComponent::class)->name('help');
Route::get('/cart',CartComponent::class)->name('product.cart');
Route::get('/checkout',CheckoutComponent::class)->name('checkout');
