<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Showposts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
Route::get('/showposts', Showposts::class);
Route::get('/create-post', CreatePost::class);
