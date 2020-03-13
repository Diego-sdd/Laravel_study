<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class ModelExport extends Model
{
    public static function randomForHome()
    {
        $id = auth()->user()->id;
        $users = DB::table('propostas')
            ->join('cliente', 'propostas.id_cliente', '=', 'cliente.id')
            ->where('id_user', '=', $id)
            ->get();

        return $users;
    }
}
