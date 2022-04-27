<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('medicamentos')->insert([
            [
                'nombre' => 'Paracetamol',
                'laboratorio' => 'Roche',
                'precio' => '$10',
                'cantidad' => '100',
                'imagen' => 'https://static.dw.com/image/19132418_101.jpg',
            ],
            [
                'nombre' => 'Ibuprofeno',
                'laboratorio' => 'Alfa',
                'precio' => '$20',
                'cantidad' => '200',
                'imagen' => 'https://images.ctfassets.net/pcz6cf5u0j0b/5sPp9SqP6jLqx3xJgqHrmP/739535714376deb06c9550daab95e256/1041363_FABE_IBUPROFENO_200MG_12TABS.png',
            ],
            [
                'nombre' => 'Diclofenaco',
                'laboratorio' => 'Bayer',
                'precio' => '$30',
                'cantidad' => '300',
                'imagen' => 'https://farmaciasgi.com.mx/wp-content/uploads/2017/09/555374_diclofenaco-100-mg-20-tab_-caja_gen.jpg',
            ],
            [
                'nombre' => 'Buscapina',
                'laboratorio' => 'Bayer',
                'precio' => '$40',
                'cantidad' => '150',
                'imagen' => 'https://www.sanborns.com.mx/imagenes-sanborns-ii/1200/7501165011649.jpg',
            ],
            [
                'nombre' => 'Amoxicilina',
                'laboratorio' => 'Alfa',
                'precio' => '$50',
                'cantidad' => '250',
                'imagen' => 'https://images.ctfassets.net/pcz6cf5u0j0b/7wDF0rylkj3KXZlXp762lh/db638888bea868217f459bd6860064d4/1039576_ALMUS_AMOXICILINA_500MG_C12_CAP.png',
            ],
            [
                'nombre' => 'Aspirina',
                'laboratorio' => 'Roche',
                'precio' => '$60',
                'cantidad' => '350',
                'imagen' => 'https://s1.eestatic.com/2018/06/08/ciencia/salud/farmacologia-farmacologia_clinica-medicamentos_313481328_81018046_1706x960.jpg',
            ],
            [
                'nombre' => 'Ambroxol',
                'laboratorio' => 'Bayer',
                'precio' => '$70',
                'cantidad' => '450',
                'imagen' => 'https://www.fahorro.com/media/catalog/product/cache/3fba745dcec88e97bfe808bedc471260/7/5/7502223700963.png',
            ],
            [
                'nombre' => 'Cefalexina',
                'laboratorio' => 'Alfa',
                'precio' => '$80',
                'cantidad' => '65',
                'imagen' => 'https://prixz.com/salud/wp-content/uploads/2020/12/Cefalexina-%C2%BFQue-es-y-para-que-sirve-e1635099843598.png',
            ],
            
        ]);
    }
}
