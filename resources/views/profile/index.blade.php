@extends('component.app')

@section('content')
    <div class="container pt-5 pb-5 d-flex justify-content-center">
        <table class="table">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td>Program mbkm</td>
                    <td>:</td>
                    <td>{{ $program_mbkm }}</td>
                </tr>
                <tr>
                    <td>Mitra</td>
                    <td>:</td>
                    <td>{{ $mitra }}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{ $program_studi }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection