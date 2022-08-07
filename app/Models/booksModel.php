<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booksModel extends Model
{
    use HasFactory;

    public function connectionToDetail()
    {
        return $this->hasOne(detailsModel::class);
    }

    public function connectionToCategory()
    {
        return $this->belongsTo(categoriesModel::class);
    }
}
