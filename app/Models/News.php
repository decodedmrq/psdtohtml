<?php
/**
 * Created by IntelliJ IDEA.
 * User: hnc
 * Date: 4/12/2017
 * Time: 5:22 PM
 */

namespace App\Models;

use Conner\Tagging\Taggable;

class News extends Model
{
    use CloudLinkTrait;
    use Taggable;

    const TYPE_APPLICATION = 1;
    const TYPE_PROMOTION = 2;
    const TYPE_EVENT = 3;

    const STATUS_DRAFT = 0;
    const STATUS_UNPUBLISHED = 1;
    const STATUS_PUBLISHED = 2;

    const SMALL_THUMBNAIL_WIDTH = 212;
    const SMALL_THUMBNAIL_HEIGHT = 166;
    const MEDIUM_THUMBNAIL_WIDTH = 697;
    const MEDIUM_THUMBNAIL_HEIGHT = 350;

    protected $table = 'news';
    protected $appends = ['small_thumbnail', 'medium_thumbnail'];
    protected $perPage = 10;

    public function getSmallThumbnailAttribute()
    {
        $fileName = get_name_by_size($this->preview_image, self::SMALL_THUMBNAIL_WIDTH, self::SMALL_THUMBNAIL_HEIGHT);
        $path = config('image.news.path');

        return cloud_link($path . $this->id . DIRECTORY_SEPARATOR . $fileName);
    }

    public function getMediumThumbnailAttribute()
    {
        $fileName = get_name_by_size($this->preview_image, self::MEDIUM_THUMBNAIL_WIDTH, self::MEDIUM_THUMBNAIL_HEIGHT);
        $path = config('image.news.path');

        return cloud_link($path . $this->id . DIRECTORY_SEPARATOR . $fileName);
    }
}
