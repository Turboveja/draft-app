<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository
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
        $builder = User::with('images')->filterByText($text_filter);
        $rows = $paginate ? $builder->paginate() : $builder->get();

        return $rows;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $row = User::with(['images'])->find($id);

        return $row;
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $password
     * @return mixed
     */
    public function store(string $name, string $email, string $password)
    {
        $row = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        return $row;
    }

    /**
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        $row = User::destroy($id);

        return $row;
    }

    /**
     * @param $id
     * @param string $name
     * @return mixed
     */
    public function update($id, string $name, string $email, string $password = null)
    {
        $row = User::find($id);

        if ($row) {
            $data = [
                'name' => $name,
                'email' => $email
            ];

            //Change password
            if ($password) {
                $data['password'] = bcrypt($password);
            }

            $row->update($data);
        }

        return $row;
    }

    /**
     * @param $id
     * @return void
     */
    public function flushImages($id)
    {
        $row = User::find($id);

        if ($row) {
            $row->images()->delete();
        }
    }
}
