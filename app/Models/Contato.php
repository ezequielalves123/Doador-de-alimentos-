<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
use HasFactory;

protected $fillable = ['nome', 'email', 'mensagem']; // Alterar os campos para 'nome', 'email', 'mensagem'
}