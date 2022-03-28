<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model

{
    use HasFactory;
    protected $table='mahasiswa'; 
    // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
     protected $primaryKey = 'id_mahasiswa'; 
     // Memanggil isi DB Dengan primarykey
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
     'Nim',
     'Nama',
     'Kelas',
     'Jurusan',
     'Email',
     'Alamat',
     'Tanggallahir',
     ]; 
    }
