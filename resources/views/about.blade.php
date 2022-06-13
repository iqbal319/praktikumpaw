<x-navbar>
    @slot('page', "about")
</x-navbar>

<x-app-layouts>

    @slot('title', "About Me")

    @slot('content')
    <div class="foto-wrapper">
        <img src="/img/dimas wing bagas bimantara.JPG" alt="dimas wing bagas bimnatara" width="200px">
        <h1>Dimas Wing Bagas Bimantara</h1>
    </div>

    <div>
        <h1>Background</h1>
        <p>
            Nama saya Wing, saya berasal dari Kediri. Saya merupakan anak ke 2 dari 3 bersaudara. Waktu masih Tk saya tinggal di Kalimantan. Sampai kelas 5 SD saya kembali ke daerah asal dan melanjutkan sekolah hingga tamat SMA. Lalu saya melanjutkan kuliah ke UTM dan memilih jurusan Teknik Informatika.
        </p>
    </div>

    <div class="mt-5">
        <h1>Suka Duka Praktikum PAW </h1>
        <p>
            Selama praktikum Banyak kejadian tak terduga. pada saat praktikum pertama lupa melihat jadwal mengikuti di online. pada praktikum kedua juga sama karena pergantian jadwal jadi mengikuti praktikum online lagi.
        </p>
        <h3>Kritik</h3>
        <p>
            Untuk Asistensinya harusnya lebih perhatikan lagi dan harus tepat waktu. karena pada waktu asistensi yang seharusnya sesuai jadwal malah harus menunggu. Mengakibatkan banyak waktu yang tersita untuk kegiatan lain.
        </p> 

        <h3>Saran</h3>
        <p>
            Lebih baik lagi untuk kedepannya dan diperbaiki lagi kesalahan yang di dapat agar tidak terulang kembali di lain waktu.
        </p>
        
    </div>

    @endslot

</x-app-layouts>