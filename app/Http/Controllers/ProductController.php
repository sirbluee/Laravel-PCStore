<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\ProductModel;
use App\Models\ColorModel;
use App\Models\BrandModel;
use App\Models\ProductColorModel;
use App\Models\ProductImageModel;
use App\Http\Controllers\Product;
class ProductController extends Controller
{
    public function getCategory($slug, $subslug = '')
    {
        $getProductSingle = ProductModel::getSingleSlug($slug);

        $getCategory = CategoryModel::getSingleSlug($slug);
        $getSubCategory = SubCategoryModel::getSingleSlug($subslug);

        $data['getColor'] = ColorModel::getRecordActive();
        $data['getBrand'] = BrandModel::getRecordActive();

        if (!empty($getProductSingle)) {
            $data['meta_title'] = $getSubCategory->title;
            $data['meta_description'] = $getSubCategory->short_description;

            $data['getProduct'] = ProductModel::getProduct($getCategory->id, $getSubCategory->id);
            return view('product.detail', $data);
        } else if (!empty($getCategory) && !empty($getSubCategory)) {
            $data['meta_title'] = $getSubCategory->meta_title;
            $data['meta_description'] = $getSubCategory->meta_description;
            $data['meta_keywords'] = $getSubCategory->meta_keywords;

            $data['getSubCategory'] = $getSubCategory;
            $data['getCategory'] = $getCategory;

            $data['getProduct'] = ProductModel::getProduct($getCategory->id, $getSubCategory->id);

            $data['getSubCategoryFilter'] = SubCategoryModel::getRecordSubCategory($getCategory->id);

            return view('product.list', $data);
        } else if (!empty($getCategory)) {

            $data['getSubCategoryFilter'] = SubCategoryModel::getRecordSubCategory($getCategory->id);

            $data['getCategory'] = $getCategory;

            $data['meta_title'] = $getCategory->meta_title;
            $data['meta_description'] = $getCategory->meta_description;
            $data['meta_keywords'] = $getCategory->meta_keywords;

            $data['getProduct'] = ProductModel::getProduct($getCategory->id);

            return view('product.list', $data);
        } else {
            abort(404);
        }
    }

    public function show($id)
    {
        // Fetch the product by ID
        $product = ProductModel::findOrFail($id);

        // Return the 'show' view with the product data
        return view('admin.show', compact('product'));
    }
}
