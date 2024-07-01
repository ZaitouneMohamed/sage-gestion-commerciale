<?php

namespace App\Services;

class ImagesServices
{
    public function uploadImage($file, $path)
    {
        $image_name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('/' . $path), $image_name);
        return $image_name;
    }

    public function DeleteImageFromDirectory($image, $path)
    {
        $file = "/" . $path . '/' . $image;
        if (file_exists(public_path($file)))
            unlink(public_path($file));
        else
            return "image not found";
    }
}
