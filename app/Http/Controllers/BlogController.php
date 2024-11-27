<?php

namespace App\Http\Controllers;

use App\Models\Plog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(){
        // Retrive All Posts
        $blogs= Plog::all();

        return view('Posts.index',compact('blogs'));
    }

    public function create(){
        return view('Posts.Create');
    }

    public function store(Request $req){
        // There three ways to create new Blog

        /* Craete Blog by using Blog instance   */
            $blog = new Plog();
            $blog->title = $req->title;
            $blog->subTitle = $req->subTitle;
            $blog->save();
        /* End Craete Blog by using Blog instance   */
        // ====================================================================

        /* Craete Blog by using Create Method in Tow ways , Should Declare $fillable in Plog Model  */

        /* First way    */
            // Plog::create([
            //     'title'=> $req->title ,
            //     'subTitle'=> $req->subTitle
            // ]);
        /* End First way    */

        /* Second way   */
            // Plog::create($req->all());
        /* End End way */

        return redirect()->route('blog.index');
    }

    public function edit( $id){
        $blog = Plog::Find($id);
        return view('Posts.Edit', compact('blog'));
    }

    public function update(Request $req, $id){
        $blog = Plog::Find($id);

        /* Edit Blog by using Blog instance   */
        $blog->title = $req->title;
        $blog->subTitle = $req->subTitle;
        $blog->save();
        /* End Craete Blog by using Blog instance   */
        // ====================================================================

        /* Edit Blog by using update Method in Tow ways , Should Declare $fillable in Plog Model  */

        /* First way    */
            // $blog->update([
            //     'title'=> $req->title ,
            //     'subTitle'=> $req->subTitle
            // ]);
        /* End First way    */

        /* Second way   */
            // $blog->update($req->all());
        /* End End way */

        return redirect()->route('blog.index');
    }

    public function destroy($id){
        /*
            You Can Delete By three ways
        */

        /* Delete Blog as Elqent */
        // Plog::destroy($id);
        /* End Delete Blog as Elqent */
        // ============================================================

        /*
            in These ways , must be determind Blog Record (by using Find method or any other way ) to Delete
            delete() => used in all cases (if use SoftDelete or not) .
                        if used soft delete, it enables to retrive the deleted record
            forceDelete() => used in all cases (if use SoftDelete or not) , but it is used to permanently delete
        */
        $blog = Plog::Find($id);

        $blog->delete();
        // $blog->forceDelete();

        return redirect()->route('blog.index');
    }
}
