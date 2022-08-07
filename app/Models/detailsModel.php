<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailsModel extends Model
{
    use HasFactory;
    
    public function connectionToBook()
    {
        return $this->belongsTo(booksModel::class);
    }
}
