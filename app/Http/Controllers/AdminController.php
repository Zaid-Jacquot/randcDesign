<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
   // =-=-=-=-=-=-=-=-=-=-=-=Method Read or view Category=-=-=-=-=-=-=-=-==
   public function view_category()
   {
    $data = Category::all();
    return view('admin.category', compact('data'));
   }

   // =-=-=-=-=-=-=-=-=-=-=-= End Method Read or view Category=-=-=-=-=-=-=-=-==

   //-=-=-=-=-=-=-=-=-=-=-=-=Method for Add_Category=-=-=-=-=-=-=-=-=//
   public  function add_category(Request $request)
   {
       $category = new Category;

       $category-> category_name = $request ->category;
       $category->save();

       toastr()->addSuccess('Category Added Successfully ');

       return redirect()->back();

   }

   //-=-=-=-=-=-=-=-=-=-=-=-=End Method for Add_Category=-=-=-=-=-=-=-=-=//


   //=-=-=-=-=-=-=-=-=-=-=-=-=-=-Method for Delete_Category=-=-=-=-=-=-=-=-=-=-=//
   public function delete_category($id)
   {
      $data = Category::find($id);
      $data->delete();
      toastr()->addSuccess('Category Deleted Successfully ');
      return redirect()->back();
   }

   //=-=-=-=-=-=-=-=-=-=-=-=-=-=-End Method for Delete_Category=-=-=-=-=-=-=-=-=-=-=//


   //=-=-=-=-=-=-=-==-Method for Category_Edit=-=-=-=-=-=-=-=-=//
   public function edit_category($id)
   {
      $data = Category::find($id);
      return view('admin.edit_category', compact('data'));
   }
   //=-=-=-=-=-=-=-==-End Method for Category_Edit=-=-=-=-=-=-=-=-=//


   //=-=-=-=-=-=-=-=-=-=-=-=-Method for Update_Category=-=-=-=-=-=-=-=-=//
   public function update_category(Request $request,$id)
   {
      $data = Category::find($id);

      $data->category_name=$request->category;

      $data->save();

      toastr()->addSuccess('Category Updated Successfully ');

      return redirect('/view_category');
   }

   //=-=-=-=-=-=-=-=-=-=-=-=-End Method for Update_Category=-=-=-=-=-=-=-=-=//



   // =-=-=-=-=-=-=-=-=-=-=-=-=-Method for Add_Product=-=-=-=-=-=-=-=-=-=//
   public function add_product()
   {
      $category = Category::all();
      return view('admin.add_product', compact('category'));
   }

   // =-=-=-=-=-=-=-=-=-=-=-=-=-End Method for Add_Product=-=-=-=-=-=-=-=-=-=//


   // =-=-=-=-=-=-=-=-=-=-=-Method for Upload_Product=-=-=-=-=-=-=-=//
   public function upload_product(Request $request)
   {
      $data = new Product;

      $data->title = $request->title;

      $data->description = $request->description;
      
      $data->price = $request->price;

      $data->quantity = $request->qty;

      $data->category = $request->category;

      $image = $request->image;

      if($image)
      {
         $imagename = time().'.'.$image->getClientOriginalExtension();
         $request->image->move('products', $imagename);
         $data->image = $imagename;
      }

      $data->save();

      toastr()->addSuccess('Category Added Successfully ');  
      return redirect()->back();

   }

   // =-=-=-=-=-=-=-=-=-=-=-End Method for Upload_Product=-=-=-=-=-=-=-=//

   //******=-=-=-=-=-==**** Method view product****=-=-=-=-=-=-=-=-=-******//
   public function view_product()
   {
      $product = Product::all();
      return view('admin.view_product', compact('product'));
   }

   //******=-=-=-=-=-==**** End Method view product****=-=-=-=-=-=-=-=-=-******//


   //***=-=-=-=-=-=-=-=-=*******Delete Product Data****=-=-=-=-=-=-=-=-=-******//
   public function delete_product($id)
   {
      $data = Product::find($id);

       //**********=-=-=-=-=-=-=-Method for Delete Image From Public Folder=-=-=-=-=-=-=-=-=-=//
      $image_path = public_path('products/'.$data->image);

      if(file_exists($image_path))
      {
         unlink($image_path);
      }

      $data->delete();

      toastr()->addSuccess(' Deleted Products Successfully ');
      return redirect()->back();

   }

   //***=-=-=-=-=-=-=-=-=*******End Delete Product Data****=-=-=-=-=-=-=-=-=-******//


   //**********=-=-=-=-=-=-=-Method for update_product =-=-=-=-=-=-=**********

   public function update_product($id)
   {
      $data = Product::find($id);

      $category = Category::all();

      return view('admin.update_page', compact('data','category'));
   }

   //**********=-=-=-=-=-=-=-End Method for update_product =-=-=-=-=-=-=**********//

   //  //**********=-=-=-=-=-=-=-Method for Edit_product =-=-=-=-=-=-=**********//

   public function edit_product(Request $request, $id)
   {
      $data = Product::find($id);

      $data->title = $request->title;
      $data->description = $request->description;
      $data->price = $request->price;
      $data->quantity = $request->quantity;
      $data->category = $request->category;

      $image = $request->image;

      if($image)
      {
         $imagename = time().'.'.$image->getClientOriginalExtension();

         $request->image->move('products', $imagename);

         $data->image = $imagename;
      }

      $data->save();
      toastr()->addSuccess('Product Updated Successfully ');
      return redirect('/view_product');
   }

   //  //**********=-=-=-=-=-=-=-End Method for Edit_product =-=-=-=-=-=-=**********//

   // Méthode product search

   public function product_search(Request $request)
{
    $search = $request->search; 

    $product = Product::where('title', 'LIKE', '%' . $search . '%')->orWhere('category', 'LIKE', '%' . $search . '%')->paginate(3);

    return view('admin.view_product', compact('product'));
}





}