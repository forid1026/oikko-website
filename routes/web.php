<?php

use App\Livewire\Layout\Main;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Projects;
use App\Livewire\ProjectDetail;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/projects', Projects::class)->name('projects.index');
Route::get('/project/{slug}', ProjectDetail::class)->name('projects.show');
Route::get('/contact', Contact::class)->name('contact');
