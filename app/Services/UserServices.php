<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UserServices
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function update($id, $attributes, $isFile = '', $storage = '')
    {
        $model = $this->model->find($id);
        if ($isFile == true) {
            $img = request()->file('img');
            $img->storeAs($storage, $img->hashName());

            if ($model->img !== 'avatar.png') {
                Storage::delete($storage . '/' . $model->img);
            }

            $attributes['img'] = $img->hashName();
        }

        if ($attributes['password'] == null) {
            $attributes['password'] = $model->password;
        } else {
            $attributes['password'] = bcrypt($attributes['password']);
        }

        $model->update($attributes);
        return $model;
    }
}
