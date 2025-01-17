<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CommonModel extends Model
{
    use HasFactory;

    protected $table;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if (isset($attributes['table'])) {
            $this->setTable($attributes['table']);
        }
    }

    public function setTableName($tableName)
    {
        $this->table = $tableName;
    }
}