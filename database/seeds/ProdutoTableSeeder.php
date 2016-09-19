<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)', 
        			array('Geladeira', 2, 5900, 'Side by Side com gelo na porta'));
        DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)', 
        			array('Fogao', 5, 950, 'Painel automático e forno elétrico'));
        DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)', 
        			array('Microondas', 1, 1520, 'Manda SMS quando termina de esquentar'));
    }
}
