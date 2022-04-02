<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    use HasFactory;

    public function faits() {

        $faits = Fact::all();

        return $faits;
    }

}
