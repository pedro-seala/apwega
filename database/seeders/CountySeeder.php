<?php

namespace Database\Seeders;

use App\Models\County;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counties = [
            // Bengo
            [
                'Ambriz',
                'Bula Atumba',
                'Dande, Dembos',
                'Nambuangongo',
                'Pango Aluquém'
            ],

            // Benguela
            [
                'Balombo',
                'Baía Farta',
                'Benguela',
                'Bocoio',
                'Caimbambo',
                'Catumbela',
                'Chongorói',
                'Cubal',
                'Ganda',
                'Lobito'
            ],

            // Bie
            [
                'Andulo',
                'Camacupa',
                'Catabola',
                'Chinguar',
                'Chitembo',
                'Cuemba',
                'Cunhinga',
                'Cuíto',
                'Nharea'
            ],

            // Cabinda
            [
                'Belize',
                'Buco-Zau',
                'Cabinda',
                'Cacongo'
            ],

            // Cuando-cubango
            [
                'Calai',
                'Cuangar',
                'Cuchi',
                'Cuito',
                'Cuanavale',
                'Dirico',
                'Mavinga',
                'Menongue',
                'Nancova',
                'Rivungo'
            ],

            // Cuanza-norte
            [
                'Ambaca',
                'Banga',
                'Bolongongo',
                'Cambambe',
                'Cazengo',
                'Golungo Alto',
                'Gonguembo',
                'Lucala',
                'Quiculungo',
                'Samba Caju'
            ],

            // Cuanza-norte
            [
                'Amboim',
                'Cassongue',
                'Cela',
                'Conda',
                'Ebo',
                'Libolo',
                'Mussende',
                'Porto Amboim',
                'Quibala',
                'Quilenda',
                'Seles',
                'Sumbe'
            ],

            // Cunene
            [
                'Cahama',
                'Cuanhama',
                'Curoca',
                'Cuvelai',
                'Namacunde',
                'Ombadja'
            ],

            // Huambo
            [
                'Bailundo',
                'Cachiungo',
                'Caála',
                'Ecunha',
                'Huambo',
                'Londuimbali',
                'Longonjo',
                'Mungo',
                'Chicala-Choloanga',
                'Chinjenje',
                'Ucuma'
            ],

            // Huila
            [
                'Caconda',
                'Cacula',
                'Caluquembe',
                'Chiange',
                'Chibia',
                'Chicomba',
                'Chipindo',
                'Cuvango',
                'Humpata',
                'Jamba',
                'Lubango',
                'Matala',
                'Quilengues',
                'Quipungo'
            ],

            // Luanda

            [
                'Belas',
                'Cacuaco',
                'Cazenga',
                'Ícolo e Bengo',
                'Luanda',
                'Quilamba Quiaxi',
                'Quissama',
                'Talatona',
                'Viana'
            ],

            // Lunda-Norte
            [
                'Cambulo',
                'Capenda-Camulemba',
                'Caungula',
                'Chitato',
                'Cuango',
                'Cuílo',
                'Lóvua',
                'Lubalo',
                'Lucapa',
                'Xá-Muteba'
            ],

            // Lunda-sul
            [
                'Cacolo',
                'Dala',
                'Muconda',
                'Saurimo'
            ],

            // Malanje
            [
                'Cacuso',
                'Calandula',
                'Cambundi-Catembo',
                'Cangandala',
                'Caombo',
                'Cuaba Nzoji',
                'Cunda-Dia-Baze',
                'Luquembo',
                'Malanje',
                'Marimba',
                'Massango',
                'Mucari',
                'Quela',
                'Quirima'
            ],

            // Moxico
            [
                'Alto Zambeze',
                'Bundas',
                'Camanongue',
                'Léua',
                'Luau',
                'Luacano',
                'Luchazes',
                'Cameia',
                'Moxico'
            ],

            // Namibe
            [
                'Bibala',
                'Camucuio',
                'Moçâmedes',
                'Tômbua',
                'Virei'
            ],

            // Uige
            [
                'Alto Cauale',
                'Ambuíla',
                'Bembe',
                'Buengas',
                'Bungo',
                'Damba',
                'Milunga',
                'Mucaba',
                'Negage',
                'Puri',
                'Quimbele',
                'Quitexe',
                'Sanza Pombo',
                'Songo',
                'Uíge',
                'Zombo'
            ],

            // Zaire
            [
                'Cuimba',
                'Mabanza Congo',
                'Nóqui',
                'Nezeto',
                'Soio',
                'Tomboco'
            ]
        ];

        for ($i = 0; $i < count($counties); $i++) {
            for ($j = 0; $j < count($counties[$i]); $j++) {
                County::create([
                    'name' => $counties[$i][$j],
                    'province_id' => $i + 1
                ]);
            }
        }
    }
}
