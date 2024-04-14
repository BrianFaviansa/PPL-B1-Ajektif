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
            'syarat' => 'Kelompok tani:
            Memiliki legalitas berupa akta pendirian dan kepengurusan yang sah
            Memiliki rencana usaha tani (RUTK) yang disetujui oleh Dinas Pertanian dan Perkebunan
            Memiliki anggota minimal 10 orang
            Aktif dalam kegiatan kelompok tani
            Memenuhi persyaratan lain yang ditetapkan oleh Kementerian Pertanian atau Dinas Pertanian dan Perkebunan di daerah Anda
            Dokumen:
            KTP Elektronik (KTP-el)
            Kartu Keluarga (KK)
            Surat Tanda Usaha Petani (STUP) atau Nomor Usaha Petani (NUP)
            Bukti kepemilikan atau penguasaan lahan
            Surat pernyataan aktif bertani
            Proposal pengajuan bantuan yang berisi:
            Tujuan dan manfaat bantuan
            Rencana kegiatan
            Anggaran biaya
            Jadwal pelaksanaan
            Surat pernyataan kesanggupan untuk mengembalikan bantuan jika tidak digunakan sesuai dengan peruntukannya
            Memenuhi persyaratan lain yang ditetapkan oleh Kementerian Pertanian atau Dinas Pertanian dan Perkebunan di daerah Anda'
        ]);
    }
}
