<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personbasic extends Model
{
    use HasFactory;
    protected $fillable = [
        'age',
        'birthday',
        'charityDonor',
        'children',
        'education',
        'lengthOfResidenc',
        'estimatedIncome',
        'gender',
        'maritalStatus',
        'ownOrRent',
        'vehicle',
        'wealth',
        'yearHomeBuilt',
    ];
}
