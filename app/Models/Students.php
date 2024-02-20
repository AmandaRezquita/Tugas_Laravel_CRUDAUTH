<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students 
{
    private static $students = [
        [
            "id" => "1",
            "NIS" => "19690907",
            "nama" => "Amanda",
            "kelas" => "11 pplg 1",
            "alamat" => "kudus",
            "foto" => "img/amanda.jpg"
        ],
        [
            "id" => "2",
            "NIS" => "19690908",
            "nama" => "Aulia",
            "kelas" => "11 pplg 1",
            "alamat" => "Jakarta",
            "foto" => "img/aulia.jpg"
        ],
        [
            "id" => "3",
            "NIS" => "19690909",
            "nama" => "Mahes",
            "kelas" => "11 pplg 1",
            "alamat" => "Bandung",
            "foto" => "img/mahes.png"
        ],
        [
            "id" => "4",
            "NIS" => "19690910",
            "nama" => "Ayla",
            "kelas" => "11 pplg 1",
            "alamat" => "Surabaya",
            "foto" => "img/ayla.jpg"
        ],
        [
            "id" => "5",
            "NIS" => "19690911",
            "nama" => "Vania",
            "kelas" => "11 pplg 1",
            "alamat" => "Yogyakarta",
            "foto" => "img/vania.jpg"
        ]
    ];

    public static function all()
    {
        return self::$students;
    }
}
