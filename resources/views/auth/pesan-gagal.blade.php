@extends('layouts.app')

@section('content')
<!-- PESAN GAGAL -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <!-- start card -->
            <div class="card">
                <div class="card-header">
                    <h1>Gagal!</h1>
                </div>
                <div class="card-body py-5">
                    <div class="alert alert-danger">
                        <p><b>Oops!</b> Anda telah berhasil mendaftar.</p>
                    </div>
                </div>
                <div class="card-footer">
                    Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                </div>
            </div>
            <!-- endcard -->
        </div>
    </div>
</div>
<!-- END PESAN GAGAL -->
@endsection