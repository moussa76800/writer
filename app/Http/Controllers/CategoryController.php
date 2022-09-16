<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
        public function categories(){
            
            $categories = Category::All();
            return view('admin.categories')->with('categories',$categories);
        }

        public function addCategory() {
            return view('admin.addCategory');  
        }

        public function saveCategory(Request $request){
            $this->validate($request,['nom' => 'required|unique:categories']);
      
            $category=new Category();
            $category->nom=$request->input('nom');
           
            $category->save();
      
            return back()->with('status','La catégorie a été enregistrer avec succès !!');
      
          } 

          public function editCategory($id)
{
            $category=Category::find($id);
            return view('admin.editCategory')->with('category',$category);
    }

     public function updateCategory(Request $request){

            $this->validate($request,['nom' => 'required']);
            $category=Category::find($request->input('id'));
            $category->nom=$request->input('nom');
            $category->update();
      
        return redirect('/categories')->with('status','La catégorie a été modifiée avec succès !!'); 
} 
}

