@extends('component.app')

@section('content')
<div class="container pt-5 pb-5 d-flex justify-content-center">
    <table class="table">
        <tbody>
            <tr>
                <td>Universitas</td>
                <td>:</td>
                <td>{{ $university }}</td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>:</td>
                <td>{{ $faculty }}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>{{ $major }}</td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>:</td>
                <td>{{ $batch }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection