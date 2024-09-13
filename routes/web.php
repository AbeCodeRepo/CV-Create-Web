<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationalQualificationController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkExperienceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('loginPost');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('registerPost',[AuthController::class,'registerPost'])->name('registerPost');

Route::get('/index',[PersonalDetailController::class,'index'])->name('index');
Route::post('/savePersonalDetails',[PersonalDetailController::class,'savePersonalDetails'])->name('savePersonalDetails');

Route::get('/work-experience',[WorkExperienceController::class,'workExperience'])->name('work-experience');
Route::post('/saveWorkExperience',[WorkExperienceController::class,'saveWorkExperience'])->name('saveWorkExperience');

Route::get('/educational-qualification',[EducationalQualificationController::class,'educationalQualification'])->name('educational-qualification');
Route::post('/saveEducationalQualification',[EducationalQualificationController::class,'saveEducationalQualification'])->name('saveEducationalQualification');

Route::get('/skill',[SkillController::class,'skill'])->name('skill');
Route::post('/saveSkills',[SkillController::class,'saveSkills'])->name('saveSkills');

Route::get('/pdf-selection',[PdfController::class,'pdfSelection'])->name('pdf-selection');
Route::get('/show-pdf',[PdfController::class,'showPdf'])->name('pdf.template');
Route::post('/download-pdf',[PdfController::class,'downloadPDF'])->name('pdf.download');
