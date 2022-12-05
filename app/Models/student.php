<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    /**
     * @var mixed|string
     */
    public $image;

    public static function where(string $string, $id)
    {
    }

    public static function get()
    {
    }
}
