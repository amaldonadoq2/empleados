<?php

use Illuminate\Database\Seeder;
use App\Models\ColoresVehiculos;
use App\Models\EstadosMultas;
use App\Models\Generos;
use App\Models\MarcasVehiculos;
use App\Models\TiposLicencias;
use App\Models\TiposPlacasVehiculos;
use App\Models\TiposVehiculos;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Support\Facades\DB;
class ConfiguracionesGeneralesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->getOutput()->writeln("<info>Cargando...</info>");
        $this->truncate_tables();
        $this->seed_data();
    }

    private function seedDataWithProgressBar($data, $tableName)
    {
        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, count($data));
        $progressBar->setFormat('%message%: %current%/%max% [%bar%] %percent:3s%%');

        $progressBar->setMessage("Cargando $tableName");

        $progressBar->start();

        foreach ($data as $item) {
            $model = 'App\Models\\'.$tableName;
            $model::create([
                'descripcion' => $item['descripcion']
            ]);
            $progressBar->advance();
        }

        $progressBar->finish();
        $output->writeln("\n");
    }

    private function seed_data(){
        $this->truncate_tables();
        $this->colores_vehiculos();
        $this->estados_multas();
        $this->generos();
        $this->marcas_vehiculos();
        $this->tipos_licencias();
        $this->tipos_placas_vehiculos();
        $this->tipos_vehiculos();
    }
    private function truncate_tables(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        ColoresVehiculos::truncate();
        EstadosMultas::truncate();
        Generos::truncate();
        MarcasVehiculos::truncate();
        TiposLicencias::truncate();
        TiposPlacasVehiculos::truncate();
        TiposVehiculos::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    private function colores_vehiculos() {
        $data = [
            ['descripcion' => 'Negro'],
            ['descripcion' => 'Blanco'],
            ['descripcion' => 'Gris'],
            ['descripcion' => 'Plata'],
            ['descripcion' => 'Rojo'],
            ['descripcion' => 'Azul'],
            ['descripcion' => 'Verde'],
            ['descripcion' => 'Amarillo'],
            ['descripcion' => 'Naranja'],
            ['descripcion' => 'Marrón'],
            ['descripcion' => 'Beige'],
            ['descripcion' => 'Dorado'],
            ['descripcion' => 'Bronce'],
            ['descripcion' => 'Verde Oliva'],
            ['descripcion' => 'Gris Oscuro'],
            ['descripcion' => 'Gris Claro'],
            ['descripcion' => 'Blanco Perlado'],
            ['descripcion' => 'Negro Perlado'],
            ['descripcion' => 'Rojo Metálico'],
            ['descripcion' => 'Azul Metálico'],
            ['descripcion' => 'Gris Metálico'],
            ['descripcion' => 'Plata Metálico'],
            ['descripcion' => 'Verde Metálico'],
            ['descripcion' => 'Amarillo Metálico'],
            ['descripcion' => 'Blanco Nacarado'],
            ['descripcion' => 'Negro Nacarado'],
            ['descripcion' => 'Rojo Nacarado'],
            ['descripcion' => 'Azul Nacarado'],
            ['descripcion' => 'Gris Nacarado'],
            ['descripcion' => 'Plata Nacarado'],
            ['descripcion' => 'Amarillo Nacarado'],
            ['descripcion' => 'Verde Nacarado'],
            ['descripcion' => 'Morado'],
            ['descripcion' => 'Rosa'],
            ['descripcion' => 'Turquesa'],
            ['descripcion' => 'Blanco Hueso'],
            ['descripcion' => 'Verde Esmeralda'],
            ['descripcion' => 'Azul Cielo'],
            ['descripcion' => 'Azul Marino'],
            ['descripcion' => 'Azul Eléctrico'],
            ['descripcion' => 'Rojo Cereza'],
            ['descripcion' => 'Marrón Chocolate'],
            ['descripcion' => 'Amarillo Limón'],
            ['descripcion' => 'Naranja Brillante'],
            ['descripcion' => 'Azul Claro'],
            ['descripcion' => ' Azul Medianoche'],
            ['descripcion' => 'Verde Lima'],
            ['descripcion' => 'Verde Bosque'],
            ['descripcion' => 'Rojo Carmesí'],
            ['descripcion' => 'Blanco Puro'],
            ['descripcion' => 'Gris Pizarra'],
            ['descripcion' => 'Gris Acero'],
            ['descripcion' => 'Rojo Rubí'],
            ['descripcion' => 'Azul Zafiro'],
            ['descripcion' => 'Amarillo Canario'],
            ['descripcion' => 'Naranja Oscuro'],
            ['descripcion' => 'Morado Oscuro'],
            ['descripcion' => 'Rosa Pastel'],
            ['descripcion' => 'Verde Menta'],
            ['descripcion' => 'Verde Oliva Oscuro'],
            ['descripcion' => 'Marrón Claro'],
            ['descripcion' => 'Marrón Oscuro'],
            ['descripcion' => 'Dorado Brillante'],
            ['descripcion' => 'Bronceado'],
            ['descripcion' => 'Verde Militar'],
            ['descripcion' => 'Verde Esmeralda Claro'],
            ['descripcion' => 'Azul Celeste'],
            ['descripcion' => 'Rojo Anaranjado'],
            ['descripcion' => 'Rojo Oscuro'],
            ['descripcion' => 'Blanco Marfil'],
            ['descripcion' => 'Gris Perla'],
            ['descripcion' => 'Gris Grafito'],
            ['descripcion' => 'Azul Cobalto'],
            ['descripcion' => 'Amarillo Dorado'],
            ['descripcion' => 'Naranja Intenso'],
            ['descripcion' => 'Morado Claro'],
            ['descripcion' => 'Rosa Fuerte'],
            ['descripcion' => 'Verde Claro'],
            ['descripcion' => 'Verde Oscuro'],
            ['descripcion' => 'Azul Turquesa'],
            ['descripcion' => 'Azul Índigo'],
            ['descripcion' => 'Rojo Rubí Oscuro'],
            ['descripcion' => 'Rojo Vino'],
            ['descripcion' => 'Blanco Alabastro'],
            ['descripcion' => 'Gris Humo'],
            ['descripcion' => 'Azul Marino Oscuro'],
            ['descripcion' => 'Amarillo Brillante'],
            ['descripcion' => 'Naranja Claro'],
            ['descripcion' => 'Morado Intenso'],
            ['descripcion' => 'Rosa Pálido'],
            ['descripcion' => 'Verde Jade'],
            ['descripcion' => 'Verde Salvia'],
            ['descripcion' => 'Azul Pastel'],
            ['descripcion' => 'Azul Real'],
            ['descripcion' => 'Rojo Bermellón'],
            ['descripcion' => 'Rojo Brillante'],
            ['descripcion' => 'Blanco Nieve'],
            ['descripcion' => 'Gris Azulado'],
            ['descripcion' => 'Azul Ultramarino'],
            ['descripcion' => 'Rojo Cardenal'],
        ];

        
        $this->seedDataWithProgressBar($data, 'ColoresVehiculos');
    }
    private function estados_multas() {
        $data = [
            ['descripcion' => 'Solvente'],
            ['descripcion' => 'Insolvente'],
        ];        

        $this->seedDataWithProgressBar($data, 'EstadosMultas');
    }
    private function generos() {
        $data = [
            ['descripcion' => 'Masculino'],
            ['descripcion' => 'Femenino'],
        ];
        

        $this->seedDataWithProgressBar($data, 'Generos');
    }
    private function marcas_vehiculos() {
        $data = [
            ['descripcion' => 'Toyota'],
            ['descripcion' => 'Nissan'],
            ['descripcion' => 'Hyundai'],
            ['descripcion' => 'Kia'],
            ['descripcion' => 'Mitsubishi'],
            ['descripcion' => 'Honda'],
            ['descripcion' => 'Ford'],
            ['descripcion' => 'Chevrolet'],
            ['descripcion' => 'Volkswagen'],
            ['descripcion' => 'Mazda'],
            ['descripcion' => 'Suzuki'],
            ['descripcion' => 'Isuzu'],
            ['descripcion' => 'Mercedes-Benz'],
            ['descripcion' => 'BMW'],
            ['descripcion' => 'Audi'],
            ['descripcion' => 'Jeep'],
            ['descripcion' => 'Lexus'],
            ['descripcion' => 'Subaru'],
            ['descripcion' => 'Fiat'],
            ['descripcion' => 'Volvo'],
        ];

       
        $this->seedDataWithProgressBar($data, 'MarcasVehiculos');

    }
    private function tipos_licencias() {
        $data = [
            ['descripcion' => 'A'],
            ['descripcion' => 'B'],
            ['descripcion' => 'C'],
            ['descripcion' => 'M'],
        ];

        $this->seedDataWithProgressBar($data, 'TiposLicencias');

    }
    private function tipos_placas_vehiculos() {
        $data = [
            ['descripcion'=>'P'],
            ['descripcion'=>'C'],
            ['descripcion'=>'M'],
            ['descripcion'=>'A'],
            ['descripcion'=>'U'],
            ['descripcion'=>'CD'],
            ['descripcion'=>'MI'],
            ['descripcion'=>'DIS'],
            ['descripcion'=>'O'],
            ['descripcion'=>'CC'],
            ['descripcion'=>'E'],
            ['descripcion'=>'EXT'],
            ['descripcion'=>'TC'],
            ['descripcion'=>'TRC'],
        ];


        $this->seedDataWithProgressBar($data, 'TiposPlacasVehiculos');

    }
    private function tipos_vehiculos(){
         $data = [
            ['descripcion' => 'Motocicleta'],
            ['descripcion' => 'Camioneta'],
            ['descripcion' => 'Automovil'],
            ['descripcion' => 'Camionetas'],
            ['descripcion' => 'Autobuses'],
            ['descripcion' => 'Microbus'],
            ['descripcion' => 'Ciclomotor'],
            ['descripcion' => 'Ciclomotor Eléctrico'],
            ['descripcion' => 'Bicicleta'],
            ['descripcion' => 'Mototaxi'],
            ['descripcion' => 'Camion de Carga'],
            ['descripcion' => 'Furgoneta de Carga'],
        ];

        $this->seedDataWithProgressBar($data, 'TiposVehiculos');
    }

    
}
