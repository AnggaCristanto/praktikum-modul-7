@extends('layouts.main')
@section('main')
<style>
    p{
        line-height: 30px;
        text-align:justify;
    }
</style>
<div class="container" style="margin-top: 30px">
    <h1>About Me</h1>
    <div class="foto-wrapper"style="text-align: center">
        <img src="/img/angga.png" alt="Angga Cristanto" width="400px">
        <h1>Angga Cristanto</h1>
    </div>
    
    <div>
        <h1>Background</h1>
        <p>
            Nama saya Angga Cristanto, Biasa dipanggil angga, Saya tinggal di Kabupaten Ngawi, saya merupakan anak pertama dari 2 bersaudara, Saya memiliki Hobi futsal, bermain game, bermain sosmed, dan rebahan, Riwayat sekolah saya semuanya merupakan sekolah keagamaan, mulai dari MI FSM Tempurejo, MTsN 3 Ngawi, sampai MAN 1 Ngawi, Alasan saya berkuliah di Teknik Informatika UTM adalah karena bujukan teman. saya memang dari awal ingin masuk Teknik Informatika jadi saat saya diterima saya sangat senang.
        </p>
    </div>
    <br>
    <br>
    <div class="mt-5">
        <h1>Suka Duka Praktikum PAW </h1>
        <p>
            Suka duka saya pada praktikum PAW ini adalah, untuk suka nya yaitu Asprak dari praktikum ini tidak terlalu memberatkan praktikan, jika dibandingkan dengan kelas sebelah mungkin kelas ini tugasnya lebih sedikit. Sedangkan untuk duka nya yaitu pada modul 6-7 tiba-tiba disuruh membuat crud dengan laravel, padahal sebelumnya belum pernah diajari crud pada laravel, meskipun seminggu sebelum deadline masih sempat dijelaskan mengenai itu akan tetapi saya rasa terlalu tiba-tiba saja.
        </p>
        <h3>Kritik</h3>
        <p>
            banyak tugas yang keluar tidak tepat waktu, terkadang jadwal praktikum juga diganti, saat menjelaskan juga mungkin terlalu cepat, jadi susah praktikan untuk mengikuti apa ynag dijelaskan asprak.
        </p> 

        <h3>Saran</h3>
        <p>
            dilihat dari kritik yang ada sarannya hanyalah semoga kedepannya lebih terstruktur, dan untuk menjelaskan supaya lebih friendly
        </p>
    </div>
</div>

@endsection