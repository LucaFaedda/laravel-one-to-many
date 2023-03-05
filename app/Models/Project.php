<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Support\Str;
use App\Models\Type;

class Project extends Model
{
    protected $fillable = ['title', 'data_progetto', 'difficoltà', 'descrizione', 'slug', 'types_id'];
    use HasFactory;

    public static function generateSlug($title){
        return Str::slug($title, '-');
    }

    public function type(){
        return $this->belongsTo(Type::class, 'types_id'); // Serve aggiungere types_id sennò non mi rileva il nome
    }
}
