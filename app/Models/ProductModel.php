<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecord()
    {
        return self::select('product.*', 'users.name as created_by_name')
            ->join('users', 'users.id', '=', 'product.created_by')
            ->where('product.is_delete', '=', 0)
            ->orderBy('product.id', 'desc')
            ->paginate(15);
    }

    static function getProduct($category_id = '', $subcategory_id = '')
    {
        $return = ProductModel::select(
            'product.*',
            'users.name as created_by_name',
            'category.name as category_name',
            'category.slug as category_slug',
            'sub_category.name as sub_category_name',
            'sub_category.slug as sub_category_slug'
        )

            ->join('users', 'users.id', '=', 'product.created_by')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('sub_category', 'sub_category.id', '=', 'product.sub_category_id');

        if (!empty($category_id)) {
            $return = $return->where('product.category_id', '=', $category_id);
        }
        if (!empty($subcategory_id)) {
            $return = $return->where('product.sub_category_id', '=', $subcategory_id);
        }
        $return = $return->where('product.is_delete', '=', 0)
            ->where('product.status', '=', 0)
            ->orderBy('product.id', 'desc')
            // Product Pagination how many you want to show (in client side)
            ->paginate(6);
        return $return;
    }

    static public function getImageSingle($product_id)
    {
        return ProductImageModel::where('product_id', '=', $product_id)->orderBy('order_by', 'asc')->first();
    }

    static public function getSingleSlug($slug)
    {
        return self::where('slug', '=', $slug)
            ->where('product.is_delete', '=', 0)
            ->where('product.status', '=', 0)
            ->first();
    }

    static public function checkSlug($slug)
    {
        return self::where('slug', '=', $slug)->count();
    }

    public function getColor()
    {
        return $this->hasMany(ProductColorModel::class, "product_id");
    }

    public function getSize()
    {
        return $this->hasMany(ProductSizeModel::class, "product_id");
    }

    public function getImage()
    {
        return $this->hasMany(ProductImageModel::class, "product_id")->orderBy('order_by', 'asc');
    }


    // details protected function
    // public function show($slug)
    // {
    //     $product = ProductModel::getSingleSlug($slug);

    //     if (!$product) {
    //         abort(404); // If product not found, return 404 error
    //     }

    //     // Get related data
    //     $productImages = $product->getImage; // Assuming 'getImage' relationship returns all images
    //     $productColors = $product->getColor; // Assuming 'getColor' relationship returns all colors

    //     return view('product.show', compact('product', 'productImages', 'productColors'));
    // }
}
