<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlunoTableSeeder::class
         ]);
    }
}

class AlunoTableSeeder extends Seeder {
    
    public function run(){
        DB::insert('insert into alunos
            (nome, idade, matricula, nivel_de_ensino, serie , turma, estado)
            values(?,?,?,?,?,?,?)',
            array('Ana Paula Pereira', 14, '1200340', 'Ensino Fundamental', '9º Ano', 'C', 'Roraima'));

        DB::insert('insert into alunos
            (nome, idade, matricula, nivel_de_ensino, serie , turma, estado)
            values(?,?,?,?,?,?,?)',
            array('Marcos Wairgarten', 18, '1000001', 'Ensino Médio', '3º Ano', 'B', 'Santa Catarina'));
        
        DB::insert('insert into alunos
            (nome, idade, matricula, nivel_de_ensino, serie , turma, estado)
            values(?,?,?,?,?,?,?)',
            array('Luana Freitas', 16, '1680001', 'Ensino Médio', '2º Ano', '5', 'Mato Grosso do Sul'));
    }
}


