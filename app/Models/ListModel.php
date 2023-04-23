<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListModel extends Model
{

    use HasFactory;
    protected $table = 'accounts';

    // static $list_account = [
    //     [
    //         "name" => "Shabrina Putri Fudali",
    //         "bank" => "Bank Mandiri",
    //         "nomor_rekening" => "1440022415449"
    //     ],
    //     [
    //         "name" => "Shabrina Putri Fudali",
    //         "bank" => "Bank BCA",
    //         "nomor_rekening" => "8692396528"
    //     ],
    //     [
    //         "name" => "Alfatih Rizqi Alfian",
    //         "bank" => "Bank BCA",
    //         "nomor_rekening" => "6755503138"
    //     ],
    //     [
    //         "name" => "Shabrina Putri Fudali",
    //         "bank" => "Bank BCA",
    //         "nomor_rekening" => "8692396528"
    //     ],
    //     [
    //         "name" => "Alfatih Rizqi Alfian",
    //         "bank" => "Bank BCA",
    //         "nomor_rekening" => "6755503138"
    //     ],
    //     [
    //         "name" => "Shabrina Putri Fudali",
    //         "bank" => "Bank BCA",
    //         "nomor_rekening" => "8692396528"
    //     ],
    //     [
    //         "name" => "Alfatih Rizqi Alfian",
    //         "bank" => "Bank BCA",
    //         "nomor_rekening" => "6755503138"
    //     ],
    // ];


    public static function getAll()
    {
        $list_account = DB::table('accounts')->select('name', 'bank', 'acc_num')->get();
        return $list_account;
    }

    public static function find($nomor_rekening)
    {
        $lists = static::all();
        return $lists->firstWhere('acc_num', $nomor_rekening);
    }
}