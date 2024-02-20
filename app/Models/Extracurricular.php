<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular 
{
    private static $extracurricular = [
        [
            "id" => "1",
            "nama_pembina" => "Bu Ayla",
            "nama" => "Renang",
            "deskripsi" => "enang adalah olahraga air yang melibatkan perenang berenang di dalam kolam atau perairan terbuka dengan gerakan kaki dan tangan tertentu. "
        ],
        [
            "id" => "1",
            "nama_pembina" => "Pak Aaron",
            "nama" => "Basket",
            "deskripsi" => "Basket adalah olahraga bola basket yang dimainkan dengan tim yang berusaha mencetak poin dengan melemparkan bola ke keranjang lawan."
        ],
        [
            "id" => "1",
            "nama_pembina" => "Bu Aulia",
            "nama" => "Badminton",
            "deskripsi" => "Badminton adalah olahraga raket yang dimainkan di lapangan yang dibagi dengan net, dengan tujuan untuk mencetak poin dengan memukul kok dari satu sisi lapangan ke sisi lawan"
        ],
        [
            "id" => "1",
            "nama_pembina" => "Bu Mahes",
            "nama" => "Volley",
            "deskripsi" => "Volley adalah permainan tim yang dimainkan di lapangan yang dibagi menjadi dua sisi dengan bola voli yang dilemparkan di atas jaring dan tujuan untuk mencetak poin dengan melemparkan bola ke lapangan lawan"
        ],
        [
            "id" => "1",
            "nama_pembina" => "Bu Vania",
            "nama" => "Music",
            "deskripsi" => "Musik adalah bentuk seni yang melibatkan penghasilan dan penikmatan suara atau melodi yang dihasilkan melalui instrumen atau suara manusia, sering digunakan sebagai ungkapan ekspresi artistik atau hiburan"
        ]
    ];
    public static function all()
    {
        return self::$extracurricular;
    }
}
