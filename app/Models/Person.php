<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Memo;

class Person extends Model
{
    use HasFactory;

    public function getData() {
        return $this->name;
    }

    public function memos() {
        return $this->hasMany(Memo::class);
    }
}
