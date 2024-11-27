<?php

use App\Http\Controllers\BlogController;
use App\Models\Plog;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get( '/blogs', function(){
    // == index
    // $bolgs = Plog::all();
    // $bolgs = Plog::paginate(5);

    // == create
    // $blog = new Plog();
    // $blog->title = "title 2";
    // $blog->subTitle = "Sub Title 2";
    // $blog->save();

    // Plog::create([
    //     'title'=> 'Title 3',
    //     'subTitle' => 'Sub Title 3',
    // ]);


    // == Show
    // $blog = Plog::Find(1);
    // $blog = Plog::all()->where('title','Test Blog');

    // == Edit
    // $editBlog = Plog::Find(1);
    // $editBlog->title = " المعاري";
    // $editBlog->save();

    // $editBlog::update([

    // ]);

    // == Deletion
    $dataltedBlog = Plog::Find(1);
    $dataltedBlog->delete();



    // return $blog;

    // return 'ok';

    $blogs = Plog::all();
    return $blogs;
});


Route::get('/',[BlogController::class,'index'])->name('blog.index');

Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');

Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');

Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');

Route::put('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');

Route::delete('/blog/delete/{id}',[BlogController::class,'destroy'])->name('blog.destroy');
