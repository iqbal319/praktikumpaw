<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Mahasiswa::create([
            "nrp" => "200411100119",
            "nama" => "Dimas Wing Bagas Biamantara",
            "email" => "wingdimas@gmail.com",
            "alamat"  => "Jl.Kapten tendean, Bence Gang 2",
            "status" => "belum lulus",
            "ipk" => 3.67
        ]);
        Mahasiswa::create([
            "nrp" => "200411100118",
            "nama" => "Fajar Fatha Romadhona",
            "email" => "fajar@gmail.com",
            "alamat"  => "Surabaya",
            "status" => "lulus",
            "ipk" => 3.67
        ]);
        Mahasiswa::create([
            "nrp" => "190411100118",
            "nama" => "Andrian Dwi",
            "email" => "andre@gmail.com",
            "alamat"  => "Bojonegoro",
            "status" => "belum lulus",
            "ipk" => 2.75
        ]);
    }
}
