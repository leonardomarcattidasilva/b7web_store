<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatesModel;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['state' => 'Acre', 'uf' => 'AC'],
            ['state' => 'Alagoas', 'uf' => 'AL'],
            ['state' => 'Amapá', 'uf' => 'AP'],
            ['state' => 'Amazonas', 'uf' => 'AM'],
            ['state' => 'Bahia', 'uf' => 'BA'],
            ['state' => 'Ceará', 'uf' => 'CE'],
            ['state' => 'Distrito Federal', 'uf' => 'DF'],
            ['state' => 'Espírito Santo', 'uf' => 'ES'],
            ['state' => 'Goiás', 'uf' => 'GO'],
            ['state' => 'Maranhão', 'uf' => 'MA'],
            ['state' => 'Mato Grosso', 'uf' => 'MT'],
            ['state' => 'Mato Grosso do Sul', 'uf' => 'MS'],
            ['state' => 'Minas Gerais', 'uf' => 'MG'],
            ['state' => 'Pará', 'uf' => 'PA'],
            ['state' => 'Paraíba', 'uf' => 'PB'],
            ['state' => 'Paraná', 'uf' => 'PR'],
            ['state' => 'Pernambuco', 'uf' => 'PE'],
            ['state' => 'Piauí', 'uf' => 'PI'],
            ['state' => 'Rio de Janeiro', 'uf' => 'RJ'],
            ['state' => 'Rio Grande do Norte', 'uf' => 'RN'],
            ['state' => 'Rio Grande do Sul', 'uf' => 'RS'],
            ['state' => 'Rondônia', 'uf' => 'RO'],
            ['state' => 'Roraima', 'uf' => 'RR'],
            ['state' => 'Santa Catarina', 'uf' => 'SC'],
            ['state' => 'São Paulo', 'uf' => 'SP'],
            ['state' => 'Sergipe', 'uf' => 'SE'],
            ['state' => 'Tocantins', 'uf' => 'TO'],
        ];

        DB::table('states')->insert($states);
    }
}
