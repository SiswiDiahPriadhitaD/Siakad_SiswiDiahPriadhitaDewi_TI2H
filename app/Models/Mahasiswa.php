<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Mahasiswa extends Model

{
    use HasFactory;
    protected $table='mahasiswa'; 
    protected $primaryKey = 'Nim'; 
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
     'Nim',
     'Nama',
     'Kelas_id',
     'Jurusan',

     ]; 
     public function kelas(){
         return $this->belongsTo(Kelas::class);
     }

     public function mahasiswa_matakuliah(){
        return $this->belongsToMany(Mahasiswa_MataKuliah::class);
    }
    }
