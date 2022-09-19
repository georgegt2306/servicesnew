<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $table = "tracking";
    protected $fillable = [
        'callID',
        'cardName',
        'subject',
        'itemCode',
        'itemName',
        'technicianName',
        'statusName',
        'respOnDate',
        'respOnTime',
        'descrption',
        'resolOnDate',
        'resolOnTime',
        'resolution'

    ];
}
