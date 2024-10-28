<?php

use Illuminate\Database\Seeder;
use App\Models\Departamentos;
use App\Models\Municipios;
use App\Models\Paises;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;
use Illuminate\Support\Facades\DB;
class DepartamentosMunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Municipios::truncate();
        Departamentos::truncate();
        Paises::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $departMun = $this->get_departments_mun();
        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, count($departMun));
        $progressBar->setFormat('verbose');
        $progressBar->start();
        $pais = Paises::create([
            'nombre' => 'Guatemala'
        ]);
        foreach ($departMun as $deptoData) {
            $departamento = Departamentos::create([
                'idpais' => $pais->id, // Guatemala
                'nombre' => $deptoData['depto']
            ]);

            foreach ($deptoData['mun'] as $municipioNombre) {
                Municipios::create([
                    'iddepartamento' => $departamento->id,
                    'nombre' => $municipioNombre
                ]);
            }
            $progressBar->advance();
        }
        $progressBar->finish();
        $output->writeln("\n");
    }

    private function get_departments_mun(){ 
        return 
        [
            [
                "depto" => "Alta Verapaz",
                "mun" => [
                    "Chahal",
                    "Chisec",
                    "Cobán",
                    "Fray Bartolomé de las Casas",
                    "Lanquín",
                    "Panzós",
                    "Raxruha",
                    "San Cristóbal Verapaz",
                    "San Juan Chamelco",
                    "San Pedro Carchá",
                    "Santa Cruz Verapaz",
                    "Senahú",
                    "Tactic",
                    "Tamahú",
                    "Tucurú",
                    "Santa María Cahabón",
                    "Santa Catarina La Tinta"
                ]
            ],
            [
                "depto" =>"Baja Verapaz",
                "mun" => [
                    "Cubulco",
                    "Granados",
                    "Purulhá",
                    "Rabinal",
                    "Salamá",
                    "San Jerónimo",
                    "San Miguel Chicaj",
                    "Santa Cruz El Chol"
                ]
            ],
            [
                "depto" =>"Chimaltenango",
                "mun" => [
                    "Acatenango",
                    "Chimaltenango",
                    "El Tejar",
                    "Parramos",
                    "Patzicía",
                    "Patzún",
                    "Pochuta",
                    "San Andrés Itzapa",
                    "San José Poaquil",
                    "San Juan Comalapa",
                    "San Martín Jilotepeque",
                    "Santa Apolonia",
                    "Santa Cruz Balanyá",
                    "Tecpán Guatemala",
                    "Yepocapa",
                    "Zaragoza"
                ]
            ],
            [
                "depto" => "Chiquimula",
                "mun" => [
                    "Camotán",
                    "Chiquimula",
                    "Concepción Las Minas",
                    "Esquipulas",
                    "Ipala",
                    "Jocotán",
                    "Olopa",
                    "Quezaltepeque",
                    "San Jacinto",
                    "San José La Arada",
                    "San Juan Ermita"
                ]
            ],
            [
                "depto" => "El Progreso",
                "mun" => [
                    "El Jícaro",
                    "Guastatoya",
                    "Morazán",
                    "San Agustín Acasaguastlán",
                    "San Antonio La Paz",
                    "San Cristóbal Acasaguastlán",
                    "Sanarate"
                ]
            ],
            [
                "depto" => "Escuintla",
                "mun" => [
                    "Escuintla",
                    "Guanagazapa",
                    "Iztapa",
                    "La Democracia",
                    "La Gomera",
                    "Masagua",
                    "Nueva Concepción",
                    "Palín",
                    "San José",
                    "San Vicente Pacaya",
                    "Santa Lucía Cotzumalguapa",
                    "Siquinalá",
                    "Tiquisate"
                ]
            ],
            [
                "depto" => "Guatemala",
                "mun" => [
                    "Amatitlán",
                    "Chinautla",
                    "Chuarrancho",
                    "Fraijanes",
                    "Guatemala City",
                    "Mixco",
                    "Palencia",
                    "Petapa",
                    "San José del Golfo",
                    "San José Pinula",
                    "San Juan Sacatepéquez",
                    "San Pedro Ayampuc",
                    "San Pedro Sacatepéquez",
                    "San Raymundo",
                    "Santa Catarina Pinula",
                    "Villa Canales"
                ]
            ],
            [
                "depto" => "Huehuetenango",
                "mun" => [
                    "Aguacatán",
                    "Chiantla",
                    "Colotenango",
                    "Concepción Huista",
                    "Cuilco",
                    "Huehuetenango",
                    "Ixtahuacán",
                    "Jacaltenango",
                    "La Democracia",
                    "La Libertad",
                    "Malacatancito",
                    "Nentón",
                    "San Antonio Huista",
                    "San Gaspar Ixchil",
                    "San Juan Atitán",
                    "San Juan Ixcoy",
                    "San Mateo Ixtatán",
                    "San Miguel Acatán",
                    "San Pedro Necta",
                    "San Rafael La Independencia",
                    "San Rafael Petzal",
                    "San Sebastián Coatán",
                    "San Sebastián Huehuetenango",
                    "Santa Ana Huista",
                    "Santa Bárbara",
                    "Santa Cruz Barillas",
                    "Santa Eulalia",
                    "Santiago Chimaltenango",
                    "Soloma",
                    "Tectitán",
                    "Todos Santos Cuchumatan"
                ]
            ],
            [
                "depto" => "Izabal",
                "mun" => [
                    "El Estor",
                    "Livingston",
                    "Los Amates",
                    "Morales",
                    "Puerto Barrios"
                ]
            ],
            [
                "depto" => "Jalapa",
                "mun" => [
                    "Jalapa",
                    "Mataquescuintla",
                    "Monjas",
                    "San Carlos Alzatate",
                    "San Luis Jilotepeque",
                    "San Manuel Chaparrón",
                    "San Pedro Pinula"
                ]
            ],
            [
                "depto" => "Jutiapa",
                "mun" => [
                    "Agua Blanca",
                    "Asunción Mita",
                    "Atescatempa",
                    "Comapa",
                    "Conguaco",
                    "El Adelanto",
                    "El Progreso",
                    "Jalpatagua",
                    "Jerez",
                    "Jutiapa",
                    "Moyuta",
                    "Pasaco",
                    "Quezada",
                    "San José Acatempa",
                    "Santa Catarina Mita",
                    "Yupiltepeque",
                    "Zapotitlán"
                ]
            ],
            [
                "depto" => "Petén",
                "mun" => [
                    "Dolores",
                    "Flores",
                    "La Libertad",
                    "Melchor de Mencos",
                    "Poptún",
                    "San Andrés",
                    "San Benito",
                    "San Francisco",
                    "San José",
                    "San Luis",
                    "Santa Ana",
                    "Sayaxché",
                    "Las Cruces"
                ]
            ],
            [
                "depto" => "Quetzaltenango",
                "mun" => [
                    "Almolonga",
                    "Cabricán",
                    "Cajolá",
                    "Cantel",
                    "Coatepeque",
                    "Colomba",
                    "Concepción Chiquirichapa",
                    "El Palmar",
                    "Flores Costa Cuca",
                    "Génova",
                    "Huitán",
                    "La Esperanza",
                    "Olintepeque",
                    "Ostuncalco",
                    "Palestina de Los Altos",
                    "Quetzaltenango",
                    "Salcajá",
                    "San Carlos Sija",
                    "San Francisco La Unión",
                    "San Martín Sacatepéquez",
                    "San Mateo",
                    "San Miguel Sigüilá",
                    "Sibilia",
                    "Zunil"
                ]
            ],
            [
                "depto" => "Quiché",
                "mun" => [
                    "Canillá",
                    "Chajul",
                    "Chicamán",
                    "Chiché",
                    "Chichicastenango",
                    "Chinique",
                    "Cunén",
                    "Ixcán",
                    "Joyabaj",
                    "Nebaj",
                    "Pachalum",
                    "Patzité",
                    "Sacapulas",
                    "San Andrés Sajcabajá",
                    "San Antonio Ilotenango",
                    "San Bartolomé Jocotenango",
                    "San Juan Cotzal",
                    "San Pedro Jocopilas",
                    "Santa Cruz del Quiché",
                    "Uspantán",
                    "Zacualpa"
                ]
            ],
            [
                "depto" => "Retalhuleu",
                "mun" => [
                    "Champerico",
                    "El Asintal",
                    "Nuevo San Carlos",
                    "Retalhuleu",
                    "San Andrés Villa Seca",
                    "San Felipe",
                    "San Martín Zapotitlán",
                    "San Sebastián",
                    "Santa Cruz Muluá"
                ]
            ],
            [
                "depto" => "Sacatepéquez",
                "mun" => [
                    "Alotenango",
                    "Antigua",
                    "Ciudad Vieja",
                    "Jocotenango",
                    "Magdalena Milpas Altas",
                    "Pastores",
                    "San Antonio Aguas Calientes",
                    "San Bartolomé Milpas Altas",
                    "San Lucas Sacatepéquez",
                    "San Miguel Dueñas",
                    "Santa Catarina Barahona",
                    "Santa Lucía Milpas Altas",
                    "Santa María de Jesús",
                    "Santiago Sacatepéquez",
                    "Santo Domingo Xenacoj",
                    "Sumpango"
                ]
            ],
            [
                "depto" => "San Marcos",
                "mun" => [
                    "Ayutla",
                    "Catarina",
                    "Comitancillo",
                    "Concepción Tutuapa",
                    "El Quetzal",
                    "El Rodeo",
                    "El Tumbador",
                    "Esquipulas Palo Gordo",
                    "Ixchiguan",
                    "La Reforma",
                    "Malacatán",
                    "Nuevo Progreso",
                    "Ocos",
                    "Pajapita",
                    "Río Blanco",
                    "San Antonio Sacatepéquez",
                    "San Cristóbal Cucho",
                    "San José Ojetenam",
                    "San Lorenzo",
                    "San Marcos",
                    "San Miguel Ixtahuacán",
                    "San Pablo",
                    "San Pedro Sacatepéquez",
                    "San Rafael Pie de La Cuesta",
                    "San Sibinal",
                    "Sipacapa",
                    "Tacaná",
                    "Tajumulco",
                    "Tejutla"
                ]
            ],
            [
                "depto" => "Santa Rosa",
                "mun" => [
                    "Barberena",
                    "Casillas",
                    "Chiquimulilla",
                    "Cuilapa",
                    "Guazacapán",
                    "Nueva Santa Rosa",
                    "Oratorio",
                    "Pueblo Nuevo Viñas",
                    "San Juan Tecuaco",
                    "San Rafael Las Flores",
                    "Santa Cruz Naranjo",
                    "Santa María Ixhuatán",
                    "Santa Rosa de Lima",
                    "Taxisco"
                ]
            ],
            [
                "depto" => "Sololá",
                "mun" => [
                    "Concepción",
                    "Nahualá",
                    "Panajachel",
                    "San Andrés Semetabaj",
                    "San Antonio Palopó",
                    "San José Chacaya",
                    "San Juan La Laguna",
                    "San Lucas Tolimán",
                    "San Marcos La Laguna",
                    "San Pablo La Laguna",
                    "San Pedro La Laguna",
                    "Santa Catarina Ixtahuacan",
                    "Santa Catarina Palopó",
                    "Santa Clara La Laguna",
                    "Santa Cruz La Laguna",
                    "Santa Lucía Utatlán",
                    "Santa María Visitación",
                    "Santiago Atitlán",
                    "Sololá"
                ]
            ],
            [
                "depto" => "Suchitepéquez",
                "mun" => [
                    "Chicacao",
                    "Cuyotenango",
                    "Mazatenango",
                    "Patulul",
                    "Pueblo Nuevo",
                    "Río Bravo",
                    "Samayac",
                    "San Antonio Suchitepéquez",
                    "San Bernardino",
                    "San Francisco Zapotitlán",
                    "San Gabriel",
                    "San José El Idolo",
                    "San Juan Bautista",
                    "San Lorenzo",
                    "San Miguel Panán",
                    "San Pablo Jocopilas",
                    "Santa Bárbara",
                    "Santo Domingo Suchitepequez",
                    "Santo Tomas La Unión",
                    "Zunilito"
                ]
            ],
            [
                "depto" => "Totonicapán",
                "mun" => [
                    "Momostenango",
                    "San Andrés Xecul",
                    "San Bartolo",
                    "San Cristóbal Totonicapán",
                    "San Francisco El Alto",
                    "Santa Lucía La Reforma",
                    "Santa María Chiquimula",
                    "Totonicapán"
                ]
            ],
            [
                "depto" => "Zacapa",
                "mun" => [
                    "Cabañas",
                    "Estanzuela",
                    "Gualán",
                    "Huité",
                    "La Unión",
                    "Río Hondo",
                    "San Diego",
                    "Teculután",
                    "Usumatlán",
                    "Zacapa"
                ]
            ]
        ];
    }
}
