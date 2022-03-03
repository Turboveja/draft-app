<?php

namespace App\Http\Repositories;

use App\Models\Category;

class CategoryRepository
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
        $builder = Category::with('products')->filterByText($text_filter);
        $rows = $paginate ? $builder->paginate() : $builder->get();

        return $rows;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $row = Category::with(['products', 'images'])->find($id);

        return $row;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function store(string $name)
    {
        $row = Category::create([
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
        $row = Category::destroy($id);

        return $row;
    }

    /**
     * @param $id
     * @param string $name
     * @return mixed
     */
    public function update($id, string $name)
    {
        $row = Category::find($id);

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
        $row = Category::find($id);

        if($row){
            $row->images()->delete();
        }
    }
}
