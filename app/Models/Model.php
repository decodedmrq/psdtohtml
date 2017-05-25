<?php
/**
 * Created by IntelliJ IDEA.
 * User: monls
 * Date: 14/02/2017
 * Time: 4:18 CH
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    protected $guarded = ['id'];
}