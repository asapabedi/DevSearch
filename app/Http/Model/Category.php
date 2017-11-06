<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Http\Model
 * @property integer id
 * @property string name
 * @property string alias
 * @property integer view
 * @property integer order
 * @property integer pid
 * @property \Carbon\Carbon created_at
 * @property \Carbon\Carbon updated_at
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];
}
