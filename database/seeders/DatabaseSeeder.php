<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = md5("bisacoding-12-06-23");
        $response = Http::asForm()->post('https://recruitment.fastprint.co.id/tes/api_tes_programmer', [
            'username' => 'tesprogrammer120623C20',
            'password' => $password,
        ]);
        $produk = json_decode($response, true);
        $dataArray = $produk['data'];

        // Insert the records
        foreach ($dataArray as $data) {
            produk::create([
                'id_produk' => $data['id_produk'],
                'nama_produk' => $data['nama_produk'],
                'harga' => $data['harga'],
                'kategori' => $data['kategori'],
                'status' => $data['status'],
            ]);
        
    }
    }

}
