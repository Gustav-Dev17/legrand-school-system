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
            (nome, idade, matricula, nivel_de_ensino, serie , turma, estado, cidade)
            values(?,?,?,?,?,?,?,?)',
            array('Ana Paula Pereira', 14, '1200340', 'Ensino Fundamental I', '9º Ano', 'C', 'Amazonas', 'Manaus'));

        DB::insert('insert into alunos
            (nome, idade, matricula, nivel_de_ensino, serie , turma, estado, cidade)
            values(?,?,?,?,?,?,?,?)',
            array('Marcos Wairgarten', 18, '1000001', 'Ensino Médio', '3º Ano', 'B', 'Santa Catarina', 'Joinville'));
        
        DB::insert('insert into alunos
            (nome, idade, matricula, nivel_de_ensino, serie , turma, estado, cidade)
            values(?,?,?,?,?,?,?,?)',
            array('Luana Freitas', 16, '1680001', 'Ensino Médio', '2º Ano', 'A', 'Mato Grosso do Sul', 'Campo Grande'));

        DB::insert('insert into alunos
        (nome, idade, matricula, nivel_de_ensino, serie , turma, estado, cidade)
        values(?,?,?,?,?,?,?,?)',
        array('Marcos André de Sousa', 18, '1650001', 'Ensino Médio', '3º Ano', 'E', 'Rio Grande do Norte', 'Natal'));
    }
}


