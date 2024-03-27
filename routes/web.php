<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get("/courses", [CourseController::class,'index'])->name('course.index');
Route::get("/courses/create", [CourseController::class, 'create'])->name('course.create');

Route::post("/courses", [CourseController::class, 'store'])->name('course.store');

Route::get("/courses/{course}/edit", [CourseController::class, 'edit'])->name('course.edit');

Route::put("/courses/{course}", [CourseController::class, 'update'])->name('course.update');

Route::get("/courses/{course}/show", [CourseController::class, 'show'])->name('course.show');

Route::delete("/courses/{course}/show", [CourseController::class, 'destroy'])->name('course.destroy');