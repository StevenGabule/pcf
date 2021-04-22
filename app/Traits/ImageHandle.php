<?php

namespace App\Traits;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait ImageHandle {
    /**
     * REMOVE OLD IMAGES IN THE PUBLIC FOLDER
     * @param $image
     */
    public function removeImages($image): void
    {
        $thumbnailPath = public_path() . "/template/uploads/thumbnail/$image";
        $originalPath = public_path() . "/template/uploads/original/$image";
        $avatarPath = public_path() . "/template/uploads/small/$image";

        if (File::exists($thumbnailPath)) File::delete($thumbnailPath);
        if (File::exists($avatarPath)) File::delete($avatarPath);
        if (File::exists($originalPath)) File::delete($originalPath);
    }

    /**
     * UPLOAD NEW IMAGES IN THE PUBLIC FOLDER
     * @param $old
     * @param $image
     * @param $name
     */
    public function uploadImages($old, $image, $name)
    {
        $thumbnailImage = Image::make($image);
        $thumbnailPath = public_path() . "/template/uploads/thumbnail/";
        $originalPath = public_path() . "/template/uploads/original/";
        $avatarPath = public_path() . "/template/uploads/small/";

        if ($old !== null) {
            $this->removeImages($old);
        }

        $thumbnailImage->save($originalPath . $name);
        $thumbnailImage->fit(288, 150)->save($thumbnailPath . $name);
        $thumbnailImage->fit(32, 32)->save($avatarPath . $name);
    }
}
