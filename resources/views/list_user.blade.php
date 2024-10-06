@extends('layouts.app')

@section('content')
<style>
    /* Soft Pink Theme Styles */
    .card {
        border: none;
        border-radius: 15px;
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    
    .btn-pink {
        background-color: #DB7093;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 8px 16px;
        transition: all 0.3s;
    }
    
    .btn-pink:hover {
        background-color: #C76683;
        color: white;
    }
    
    .btn-pink-outline {
        color: #DB7093;
        border: 1px solid #DB7093;
        background-color: transparent;
        transition: all 0.3s;
    }
    
    .btn-pink-outline:hover {
        background-color: #FFF0F5;
    }
    
    .table-container {
        background-color: #FFF0F5;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        margin-top: 20px;
        overflow: hidden;
    }
    
    .table {
        margin-bottom: 0;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .table thead th {
        border-bottom: 2px solid #FFB6C1;
        color: #DB7093;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 14px;
        padding: 12px;
    }
    
    .table tbody tr {
        transition: all 0.2s;
    }
    
    .table tbody tr:hover {
        background-color: #FFF0F5;
    }
    
    .table td {
        padding: 12px;
        vertical-align: middle;
        color: #666;
    }
</style>
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="text-center mb-4" style="color: #DB7093;">Daftar Mahasiswa</h1>
            
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>NPM</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['nama'] ?></td>
                                <td><?= $user['nama_kelas'] ?></td>    
                                <td><?= $user['npm'] ?></td>
                                <td>
                                    <button class="btn btn-sm btn-pink-outline">Edit</button>
                                    <button class="btn btn-sm btn-pink-outline">Hapus</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection