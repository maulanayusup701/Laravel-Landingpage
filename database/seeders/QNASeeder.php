<?php

namespace Database\Seeders;

use App\Models\QNA;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QNASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QNA::create([
            'question' => 'Apa itu dihub.id? ',
            'answer' => 'DIHUB.ID adalah layanan pembuatan website & landing page yang di desain khusus untuk para pelaku usaha & UMKM di Indonesia. Desain yang dibuat mobile responsive & SEO friendly.',
        ]);

        QNA::create([
            'question' => 'Apakah website dibuat sendiri? ',
            'answer' => 'TIDAK! Anda cukup konsultasikan usaha Anda dan kebutuhan website yang Anda inginkan. Anda fokus urus bisnis dan tunggu website kami preview hingga launching.'
        ]);

        QNA::create([
            'question' => 'Seperti apa sistem pembayarannya? ',
            'answer' => 'Layanan dihub merupakan layanan berlangganan. Harga yang tertera merupakan harga tahunan. Pembayaran dilakukan di awal, dan melakukan perpanjangan di tahun berikutnya.'
        ]);

        QNA::create([
            'question' => 'Berapa lama proses pengerjaan?',
            'answer' => 'Pengerjaan website minimal 2 hari kerja setelah SEMUA DATA DITERIMA atau maksimal 7 hari. Periode langganan dihitung dari tanggal pembayaran.'
        ]);

        QNA::create([
            'question' => 'Apa itu akun e-mail bisnis?',
            'answer' => 'Email bisnis merupakan email yang dibuat dengan domain Anda sendiri (mis. contact@namabisnismu.com).'
        ]);

        QNA::create([
            'question' => 'Bagaimana cara pemesanan?',
            'answer' => 'Pilih paket dan desain website yang Anda inginkan, kemudian lakukan pembayaran sesuai nominal harga paket yang berlaku.'
        ]);

        QNA::create([
            'question' => 'Apakah bisa revisi setelah website rilis?',
            'answer' => 'BEBAS REVISI! Anda bisa melakukan revisi selama langganan website aktif. Ketentuan revisi hanya untuk revisi minor seperti editing informasi, tambah informasi dll, bukan revisi mengubah keseluruhan desain dan layout website.'
        ]);
    }
}
