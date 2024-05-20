<?php

namespace Database\Seeders;

use App\Models\InfoBantuan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InfoBantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InfoBantuan::create([
            'nama' => 'Bantuan Traktor',
            'ringkasan' => 'Pemerintah menyediakan berbagai macam bantuan untuk sektor pertanian, baik dari pusat maupun daerah. Bantuan ini tersedia dalam bentuk sarana dan prasarana, rehabilitasi/pembangunan gedung/bangunan, dan pembinaan. Tujuannya adalah untuk meningkatkan produktivitas pertanian, kesejahteraan petani, dan memperkuat ketahanan pangan nasional. Informasi lebih lanjut mengenai jenis bantuan, cara mendapatkannya, dan program yang sedang berjalan dapat diperoleh di website Kementerian Pertanian, website Dinas Pertanian dan Perkebunan di daerah Anda, atau dengan menghubungi langsung dinas terkait.',
            'syarat' => '<h2>Kelompok tani:</h2>
            <ul>
            <li>Memiliki legalitas berupa akta pendirian dan kepengurusan yang sah</li>
            <li>Memiliki rencana usaha tani (RUTK) yang disetujui oleh Dinas Pertanian dan Perkebunan</li>
            <li>Memiliki anggota minimal 10 orang</li>
            <li>Aktif dalam kegiatan kelompok tani</li>
            <li>Memenuhi persyaratan lain yang ditetapkan oleh Kementerian Pertanian atau Dinas Pertanian dan Perkebunan di daerah Anda</li>
            </ul>
            <h2>Dokumen:</h2>
            <ol>
            <li>KTP Elektronik (KTP-el)</li>
            <li>Kartu Keluarga (KK)</li>
            <li>Surat Tanda Usaha Petani (STUP) atau Nomor Usaha Petani (NUP)</li>
            <li>Bukti kepemilikan atau penguasaan lahan</li>
            <li>Surat pernyataan aktif bertani</li>

            <h2>Proposal pengajuan bantuan yang berisi:</h2>
            </ol>
            <ol>
            <li>Tujuan dan manfaat bantuan</li>
            <li>Rencana kegiatan</li>
            <li>Anggaran biaya</li>
            <li>Jadwal pelaksanaan</li>
            <li>Surat pernyataan kesanggupan untuk mengembalikan bantuan jika tidak digunakan sesuai dengan peruntukannya</li>
            <li>Memenuhi persyaratan lain yang ditetapkan oleh Kementerian Pertanian atau Dinas Pertanian dan Perkebunan di daerah Anda</li>
            </ol>'
        ]);
    }
}
