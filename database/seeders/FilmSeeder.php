<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var array<int, array{judul: string, deskripsi: string}> $films */
        $films = [
            ['judul' => 'Laskar Pelangi', 'deskripsi' => 'Ikal dan teman-temannya berjuang mempertahankan sekolah sederhana di Belitung bersama guru mereka, Bu Muslimah.'],
            ['judul' => 'Tanah Surga... Katanya', 'deskripsi' => 'Di wilayah perbatasan Indonesia-Malaysia, Hasyim dan keluarganya menghadapi pilihan hidup sekaligus mempertanyakan arti tanah air.'],
            ['judul' => 'Ada Apa dengan Cinta?', 'deskripsi' => 'Cinta, siswi populer di Jakarta, jatuh hati kepada Rangga, siswa pendiam yang menang lomba puisi.'],
            ['judul' => 'Petualangan Sherina', 'deskripsi' => 'Sherina berteman dengan Sadam saat liburan dan bersama-sama menghadapi penculikan di perkebunan.'],
            ['judul' => 'Pengabdi Setan', 'deskripsi' => 'Setelah ibu mereka meninggal, Rini dan adik-adiknya mengalami rangkaian kejadian gaib di rumah keluarga.'],
            ['judul' => 'The Raid', 'deskripsi' => 'Sebuah tim polisi terjebak di gedung apartemen yang dikuasai bandar narkoba dan harus berjuang keluar.'],
            ['judul' => 'The Raid 2: Berandal', 'deskripsi' => 'Polisi Rama menyamar di dalam sindikat kriminal Jakarta untuk mengungkap korupsi dan persaingan antargeng.'],
            ['judul' => 'Keluarga Cemara', 'deskripsi' => 'Setelah kehilangan harta, Abah, Emak, Euis, dan Ara memulai hidup baru di desa dan berusaha menjaga kebersamaan.'],
            ['judul' => 'Ngeri-Ngeri Sedap', 'deskripsi' => 'Sepasang orang tua Batak membuat rencana agar anak-anak mereka pulang ke kampung untuk menghadiri acara keluarga.'],
            ['judul' => 'Mencuri Raden Saleh', 'deskripsi' => 'Piko dan kelompoknya menyusun pencurian lukisan bersejarah dari istana negara demi menyelamatkan ayahnya.'],
            ['judul' => 'Gundala', 'deskripsi' => 'Sancaka memperoleh kekuatan petir dan berhadapan dengan penguasa kejahatan yang memecah belah masyarakat.'],
            ['judul' => 'Dilan 1990', 'deskripsi' => 'Milea mengenang kisah cintanya dengan Dilan, siswa SMA yang ia temui setelah pindah ke Bandung pada 1990.'],
            ['judul' => 'Yowis Ben', 'deskripsi' => 'Bayu membentuk band bersama teman-temannya untuk menarik perhatian Susan dan menghadapi masalah popularitas di sekolah.'],
            ['judul' => 'Dua Garis Biru', 'deskripsi' => 'Dara dan Bima, sepasang siswa SMA, menghadapi konsekuensi setelah kehamilan yang tidak direncanakan.'],
            ['judul' => 'Miracle in Cell No. 7', 'deskripsi' => 'Dodo, ayah dengan keterbatasan intelektual, dipenjara atas kejahatan yang tidak ia lakukan dan terpisah dari putrinya, Kartika.'],
            ['judul' => 'Habibie & Ainun', 'deskripsi' => 'Kisah hubungan B. J. Habibie dan Hasri Ainun, dari masa muda hingga perjalanan mereka membangun kehidupan bersama.'],
            ['judul' => '5 cm', 'deskripsi' => 'Lima sahabat melakukan pendakian Gunung Semeru setelah berpisah sementara untuk mengejar tujuan masing-masing.'],
            ['judul' => 'Imperfect: Karier, Cinta & Timbangan', 'deskripsi' => 'Rara menghadapi tekanan soal penampilan saat mendapat kesempatan promosi di tempat kerjanya.'],
            ['judul' => 'Cek Toko Sebelah', 'deskripsi' => 'Erwin menghadapi pilihan karier dan tanggung jawab keluarga ketika ayahnya ingin menyerahkan toko kepada kakaknya.'],
            ['judul' => 'Sang Pemimpi', 'deskripsi' => 'Ikal, Arai, dan Jimbron tumbuh di Belitung sambil bersekolah dan memelihara cita-cita untuk belajar ke luar negeri.'],
            ['judul' => 'The Shawshank Redemption', 'deskripsi' => 'Andy Dufresne menjalani hukuman penjara seumur hidup dan membangun persahabatan dengan sesama tahanan bernama Red.'],
            ['judul' => 'The Godfather', 'deskripsi' => 'Michael Corleone perlahan mengambil alih kepemimpinan keluarga kriminal Italia-Amerika milik ayahnya.'],
            ['judul' => 'The Dark Knight', 'deskripsi' => 'Batman menghadapi Joker, kriminal yang menguji batas moral warga Gotham dan para penegak hukumnya.'],
            ['judul' => 'Pulp Fiction', 'deskripsi' => 'Kisah-kisah yang saling terkait mengikuti dua pembunuh bayaran, seorang petinju, dan sejumlah tokoh di Los Angeles.'],
            ['judul' => 'Inception', 'deskripsi' => 'Dom Cobb memimpin tim yang memasuki mimpi seseorang untuk menanamkan sebuah gagasan ke dalam pikirannya.'],
            ['judul' => 'Interstellar', 'deskripsi' => 'Cooper memimpin misi melewati wormhole untuk mencari planet yang dapat dihuni saat Bumi menghadapi krisis.'],
            ['judul' => 'The Matrix', 'deskripsi' => 'Neo mengetahui bahwa realitas yang ia kenal adalah simulasi dan bergabung dengan perlawanan terhadap mesin.'],
            ['judul' => 'Parasite', 'deskripsi' => 'Keluarga Kim perlahan bekerja di rumah keluarga Park, lalu hubungan kedua keluarga berubah setelah rahasia terungkap.'],
            ['judul' => 'Spirited Away', 'deskripsi' => 'Chihiro bekerja di pemandian dunia roh untuk menyelamatkan orang tuanya yang berubah menjadi babi.'],
            ['judul' => 'Your Name.', 'deskripsi' => 'Mitsuha dan Taki, dua remaja yang belum pernah bertemu, mulai bertukar tubuh secara misterius.'],
            ['judul' => 'Coco', 'deskripsi' => 'Miguel memasuki Negeri Orang Mati dan menelusuri sejarah keluarganya demi mengejar kecintaannya pada musik.'],
            ['judul' => 'Toy Story', 'deskripsi' => 'Woody merasa tersaingi setelah Andy mendapat mainan baru bernama Buzz Lightyear.'],
            ['judul' => 'The Lion King', 'deskripsi' => 'Simba meninggalkan rumah setelah kematian ayahnya, Mufasa, lalu berjuang menerima tanggung jawabnya sebagai raja.'],
            ['judul' => 'Finding Nemo', 'deskripsi' => 'Marlin menempuh perjalanan melintasi lautan untuk mencari putranya, Nemo, yang tertangkap penyelam.'],
            ['judul' => 'Ratatouille', 'deskripsi' => 'Remy, seekor tikus dengan cita-cita menjadi koki, bekerja sama dengan Linguini di sebuah restoran Paris.'],
            ['judul' => 'WALL-E', 'deskripsi' => 'WALL-E, robot pembersih yang tertinggal di Bumi, bertemu robot EVE dan memulai perjalanan ke luar angkasa.'],
            ['judul' => 'Up', 'deskripsi' => 'Carl menerbangkan rumahnya dengan balon menuju Amerika Selatan dan tanpa sengaja membawa Russell bersamanya.'],
            ['judul' => 'Inside Out', 'deskripsi' => 'Lima emosi di dalam pikiran Riley berusaha membantunya beradaptasi setelah keluarganya pindah kota.'],
            ['judul' => 'Frozen', 'deskripsi' => 'Anna mencari kakaknya, Elsa, setelah kekuatan es Elsa membuat kerajaan Arendelle membeku.'],
            ['judul' => 'Avengers: Endgame', 'deskripsi' => 'Para Avengers yang tersisa menyusun rencana untuk membalikkan dampak tindakan Thanos.'],
            ['judul' => 'Spider-Man: Into the Spider-Verse', 'deskripsi' => 'Miles Morales menjadi Spider-Man dan bertemu para Spider-Man dari semesta lain.'],
            ['judul' => 'Jurassic Park', 'deskripsi' => 'Taman hiburan berisi dinosaurus hasil kloning kehilangan kendali saat sistem keamanannya gagal.'],
            ['judul' => 'Jaws', 'deskripsi' => 'Kepala polisi sebuah kota pesisir berusaha melindungi warga dari serangan hiu putih besar.'],
            ['judul' => 'E.T. the Extra-Terrestrial', 'deskripsi' => 'Elliott membantu makhluk asing yang tertinggal di Bumi untuk menghubungi dan kembali kepada bangsanya.'],
            ['judul' => 'Back to the Future', 'deskripsi' => 'Marty McFly terlempar ke tahun 1955 dan harus memastikan orang tuanya bertemu agar masa depannya tetap ada.'],
            ['judul' => 'Titanic', 'deskripsi' => 'Rose dan Jack menjalin hubungan di kapal RMS Titanic dalam pelayaran perdananya pada 1912.'],
            ['judul' => 'Gladiator', 'deskripsi' => 'Jenderal Romawi Maximus dikhianati, dijadikan budak, lalu bertarung sebagai gladiator untuk membalas dendam.'],
            ['judul' => 'The Lord of the Rings: The Fellowship of the Ring', 'deskripsi' => 'Frodo menerima tugas membawa Cincin Utama ke Mordor untuk menghancurkannya sebelum jatuh ke tangan Sauron.'],
            ['judul' => 'Harry Potter and the Philosopher’s Stone', 'deskripsi' => 'Harry mengetahui bahwa ia penyihir dan memulai tahun pertamanya di Sekolah Sihir Hogwarts.'],
            ['judul' => 'The Truman Show', 'deskripsi' => 'Truman mulai curiga bahwa kota dan kehidupan sehari-harinya adalah acara televisi yang disiarkan tanpa sepengetahuannya.'],
        ];

        if (Film::where('judul', 'Tanah Surga... Katanya')->exists()) {
            Film::where('judul', 'Tanah Surga Katanya')->delete();
        } else {
            Film::where('judul', 'Tanah Surga Katanya')
                ->update(['judul' => 'Tanah Surga... Katanya']);
        }

        foreach ($films as $film) {
            Film::updateOrCreate(
                ['judul' => $film['judul']],
                ['deskripsi' => $film['deskripsi']],
            );
        }
    }
}
