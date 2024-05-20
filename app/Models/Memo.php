<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Memo extends Model
{
    use HasFactory;

    public function getData() {
        return $this->text;
    }

    public function person() {
        return $this->belongsTo(Person::class);
    }

    public function userName() {
        return $this->person->getData();
    }
}
