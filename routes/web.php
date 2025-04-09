<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;



route::get('/',[
    TemplateController::class,
    'index'
]);

