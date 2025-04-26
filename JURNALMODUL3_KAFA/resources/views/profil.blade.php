@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil Mahasiswa</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <div class="mb-3">
                <!-- ==================4================== -->
                <!-- Tambahkan foto ke public/images, lalu tentukan pathnya -->
                <img src="{{asset('images/1kafa.jpeg')}}" alt="Foto Profil" class="img-thumbnail rounded-circle" width="150">
            </div>
            <!-- ==================5================== -->
            <!-- Buat file tampilan yang akan menampilkan data mahasiswa dalam bentuk tabel. -->
        <table class="table table-bordered">

            <tr>
                <th>
                    nama

                </th>
                <td>
                    {{  $mahasiswa ['nama']}}


                </td>
            </tr>

            <tr>
                <th>
                    email

                </th>
                <td>
                    {{  $mahasiswa ['email']}}



                </td>
            </tr>

            <tr>
                <th>
                    nim

                </th>
                <td>
                    {{  $mahasiswa ['nim']}}



                </td>
            </tr>

            <tr>
                <th>
                    jurusan

                </th>
                <td>
                    {{  $mahasiswa ['jurusan']}}



                </td>
            </tr>

            <tr>
                <th>
                    fakultas

                </th>
                <td>
                    {{  $mahasiswa ['fakultas']}}



                </td>
            </tr>


            <!-- Gunakan tag <tr>, <th> dan <td> untuk baris dan kolom. -->
            {{-- <!-- Gunakan sintaks Blade {{ $mahasiswa->nama_kolom }} untuk menampilkan nilai variabel. --> --}}

        </table>

        </table>
    </div>
</div>
@endsection
