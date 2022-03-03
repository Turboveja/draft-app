<?php

namespace App\Http\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * Get Items
     *
     * @param string|null $text_filter
     * @param bool $paginate
     * @return mixed
     */
    public function index(string $text_filter = null, bool $paginate = false)
    {
        $builder = Product::with('categories')->filterByText($text_filter);
        $rows = $paginate ? $builder->paginate() : $builder->get();

        return $rows;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $row = Product::with(['categories', 'images'])->find($id);

        return $row;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function store(string $name)
    {
        $row = Product::create([
            'name' => $name
        ]);

        return $row;
    }

    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        $row = Product::destroy($id);

        return $row;
    }

    /**
     * @param $id
     * @param string $name
     * @return mixed
     */
    public function update($id, string $name)
    {
        $row = Product::find($id);

        if($row){
            $row->update([
                'name' => $name
            ]);
        }

        return $row;
    }

    /**
     * @param $id
     * @return void
     */
    public function flushImages($id)
    {
        $row = Product::find($id);

        if($row){
            $row->images()->delete();
        }
    }

    /**
     * @param $id
     * @param array $categories_id
     * @param $override
     * @return mixed
     */
    public function updateCategories($id, array $categories_id, $override = true)
    {
        $row = Product::find($id);

        //Update info
        if($row){
            if (count($categories_id)) {
                //Add or replace categories
                if($override){
                    $row->categories()->sync($categories_id);
                } else {
                    $row->categories()->attach($categories_id);
                }
            } else if (!count($categories_id) && $override){
                //Detach Categories
                $row->categories()->detach();
            }
        }

        return $row;
    }
}
