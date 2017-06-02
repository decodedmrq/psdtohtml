<?php

namespace App\Models;

trait CloudLinkTrait
{
    public function getMediaLinkAttribute()
    {
        $path = config('image.' . $this->getModelNamespace() . '.path');
        $mediaLink = cloud_link('default_image.jpg');
        if ($this->{$this->mediaAttribute}) {
            $mediaLink = cloud_link($path . $this->id . DIRECTORY_SEPARATOR . $this->{$this->mediaAttribute});
        }

        return $mediaLink;
    }

    public function getModelNamespace()
    {
        return strtolower(class_basename($this));
    }
}
