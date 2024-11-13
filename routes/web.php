<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\Employ;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactPage;
use App\Http\Controllers\BlogVController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\Indu;



Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::post('/about', [AboutController::class, 'store'])->name('about');
Route::get('/contactpg', [ContactPage::class, 'index'])->name('contactpg');
Route::get('/indu', [Indu::class, 'index'])->name('indu');
Route::get('candidates/create', [CandidateController::class, 'create'])->name('candidates.create');
Route::get('/employer', [Employ::class, 'index'])->name('Employ');
Route::get('industries/{industry}', [IndustryController::class, 'show'])->name('industries.show');
Route::get('/blog', [BlogVController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogVController::class, 'show'])->name('blog.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {

    Route::post('/emails/submit', [ContactController::class, 'submit'])->name('contact.submit');
    Route::get('/emails/contact_form', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contact/reply/{id}', [ContactController::class, 'reply'])->name('contact.reply');
    Route::post('/contact/reply/{id}', [ContactController::class, 'replySubmit'])->name('contact.reply.submit');

    Route::delete('/contacts/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
Route::delete('/contacts/delete-all', [ContactController::class, 'deleteAll'])->name('contacts.deleteAll');

    Route::resource('candidates', CandidateController::class)->except(['create'])->names([
        'index' => 'candidates.index',
        'store' => 'candidates.store',
        'show' => 'candidates.show',
        'edit' => 'candidates.edit',
        'update' => 'candidates.update',
        'destroy' => 'candidates.destroy',
    ]);

    Route::get('candidates/{candidate}/download-resume', [CandidateController::class, 'downloadResume'])->name('candidates.download');
    Route::post('candidates/{candidate}/send-response', [CandidateController::class, 'sendResponse'])->name('candidates.sendResponse');
  
    
    Route::post('/employers/store', [EmployerController::class, 'store'])->name('employers.store');


    Route::resource('employers', EmployerController::class);
    
   

    Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blog', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/blog/{post}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/admin/blog/{post}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blog/{post}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

    Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    
    
    Route::resource('industries', IndustryController::class)->except(['show']);



    
});

Route::get('/job-listings', [EmployerController::class, 'jobListings'])->name('job.listings');
Route::get('/job-listings/{id}', [EmployerController::class, 'jobDetails'])->name('job.details');


require __DIR__.'/auth.php';
