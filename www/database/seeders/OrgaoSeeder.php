<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orgao;

class OrgaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orgaos = [
            [
                'nome' => 'Ministério da Economia',
                'codigo' => 25000
            ],
            [
                'nome' => 'Ministério da Justiça e Segurança Pública',
                'codigo' => 30000
            ],
            [
                'nome' => 'Ministério da Educação',
                'codigo' => 26000
            ],
            [
                'nome' => 'Presidência da República',
                'codigo' => 20000
            ],
            [
                'nome' => 'Ministério da Defesa',
                'codigo' => 52000
            ],
        ];

        foreach ($orgaos as $orgao) {
            Orgao::create($orgao);
        }
    }
}
