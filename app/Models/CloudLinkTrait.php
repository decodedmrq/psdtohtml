<?php

namespace App\Models;

trait CloudLinkTrait
{

    public function getMediaLinkAttribute()
    {
        $path = config('image.' . $this->getModelNamespace() . '.path');
        $default = config('image.default');
        $media = null;
        if ($this->image) {
            $media = $this->image;
        }
        if ($this->media) {
            $media = $this->media;
        }
        if (!is_null($media)) {
            return cloud_link($path . $this->id . DIRECTORY_SEPARATOR . $media);
        }

        return cloud_link($default);
    }

    public function getModelNamespace()
    {
        return strtolower(class_basename($this));
    }

}