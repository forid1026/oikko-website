<?php

use App\Livewire\Layout\Main;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Projects;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/projects', Projects::class);
Route::get('/contact', Contact::class);
