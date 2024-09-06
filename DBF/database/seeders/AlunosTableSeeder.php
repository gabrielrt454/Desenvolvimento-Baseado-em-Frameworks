<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([
            ['nome'=>'Gabriel Ragale', 'email'=>'gabriel.trin@estudante.ifms.edu.br', 'data_nascimento' =>'2007-01-01','cursso'=>'Desenvolvimento baseado em frameworks']
       
        ]);
        }
}
