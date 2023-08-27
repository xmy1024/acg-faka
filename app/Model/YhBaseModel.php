<?php
declare(strict_types=1);

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class YhBaseModel extends Model
{
    
    protected $connection = 'yh';

}