<?php
use App\Determinaciones;
use Illuminate\Database\Seeder;

class DeterminacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        // FISICO QUIMICO
       DB::table('determinaciones')->insert([
            'determinacion' =>"Acidez total" ,
            'tecnica' => "Tritrimétrico",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Actividad de agua" ,
            'tecnica' => "Higrolab - Rotronic",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Actividad ureásica" ,
            'tecnica' => "Colorimétrico",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Alcalinidad" ,
            'tecnica' => "APHA-AWWA-WPCF 2320B Método de titulación",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Aluminio" ,
            'tecnica' => "APHA-AWWA-WPCF 3500-Al",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Amonio" ,
            'tecnica' => "APHA-AWWA-WPCF 4500 –NH3 D",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Antioxidantes" ,
            'tecnica' => "Espectrofotometría – TEAC o ABTS",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Arsénico" ,
            'tecnica' => "Kit Merck",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Azúcares Reductores " ,
            'tecnica' => "Método Fehling – Causse - Bonnans",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Bicarbonatos" ,
            'tecnica' => "APHA-AWWA-WPCF 2320 B Método de Titulación 3)",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Calcio" ,
            'tecnica' => "APHA-AWWA-WPCF 3500 –Ca D",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Carbonatos" ,
            'tecnica' => "APHA-AWWA-WPCF 2320 B Método de Titulación 1)",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Cenizas" ,
            'tecnica' => "Gravimetría",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Cloro residual" ,
            'tecnica' => "Colorimetría por kit",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Cloruros" ,
            'tecnica' => "APHA-AWWA-WPCF 4500 –Cl - (Cloruro)",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Color" ,
            'tecnica' => "Colorímetro HunterLab",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Conductividad" ,
            'tecnica' => "Conductimetría",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Densidad" ,
            'tecnica' => "Densimetría",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Fosfatos" ,
            'tecnica' => "APHA-AWWA-WPCF 4500 –P. E",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Fósforo total" ,
            'tecnica' => "APHA-AWWA-WPCF 4500P–B5- y APHA-AWWA-WPCF 4500 P –E",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Hidratos de carbono" ,
            'tecnica' => "Espectrofotometría",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Hierro" ,
            'tecnica' => "APHA-AWWA-WPCF 3500-Fe D.",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Hidroxi Metil Furfural" ,
            'tecnica' => "HPLC -- A.O.A.C 980.23",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Humedad" ,
            'tecnica' => "Gravimétrico y Balanza infrarroja",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Índice de iodo" ,
            'tecnica' => "Iodométrico",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Índice de peróxido" ,
            'tecnica' => "Tritrimétrico",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Índice de Refracción" ,
            'tecnica' => "Refractométrico",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Magnesio" ,
            'tecnica' => "APHA-AWWA-WPCF 3500 –MgD Método",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Maltodextrinas" ,
            'tecnica' => "IRAN 15930",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Materia grasa" ,
            'tecnica' => "Gerber,  Soxhlet, Twiselman",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Nitratos" ,
            'tecnica' => "APHA-AWWA-WPCF 4500- NO3- B",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Nitritos" ,
            'tecnica' => "APHA-AWWA-WPCF 4500 –NO2- Nitrógeno (Nitrito)",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Nitrógeno total" ,
            'tecnica' => "APHA-AWWA-WPCF 4500- N orgánico- B",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"pH" ,
            'tecnica' => "Potenciométrico / PH metro",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Potasio " ,
            'tecnica' => "APHA-AWWA-WPCF 3500-K D Método Fotómetro de llama",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Proteínas" ,
            'tecnica' => "Kjeldhal",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Residuo seco a 180° C" ,
            'tecnica' => "APHA-AWWA-WPCF 2540 C – Sólidos totales disueltos secados a 180°C",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Sodio" ,
            'tecnica' => "APHA-AWWA-WPCF 3500-Na D. Método Fotométrico de emisión de llama",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Sólidos totales disueltos" ,
            'tecnica' => "APHA-AWWA-WPCF 2540 - B.",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Sólidos insolubles en agua" ,
            'tecnica' => "APHA-AWWA-WPCF 2540 – C.",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Sulfatos" ,
            'tecnica' => "APHA-AWWA-WPCF 4500-SO42- E Método Turbidimétrico",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Sulfitos " ,
            'tecnica' => "APHA-AWWA-WPCF 4500-SO42- E Método Turbidimétrico",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Zinc " ,
            'tecnica' => "APHA-AWWA-WPCF 3500-Zn F.   Método del Zincón",
            'estado' => "habilitado",
            'tipo' => "fisico_quimico"

        ]);



       //MICROBIOLOGICO



       DB::table('determinaciones')->insert([
            'determinacion' =>"Anaerobios Sulfito reductores " ,
            'tecnica' => "ISO 15213:2003",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Bacillus cereus " ,
            'tecnica' => "ISO 7932: 2006",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Bacterias Aerobias Mesófilas Totales" ,
            'tecnica' => "ICMSF – Tca Recuento en placa: 2000",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Coliformes totales" ,
            'tecnica' => "ISO 4832:2006",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Coliformes termotolerantes" ,
            'tecnica' => "APHA-AWWA-WPCF 9222.D;",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Enterococos" ,
            'tecnica' => "APHA-AWWA-WPCF 9230 C;",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Escherichia coli" ,
            'tecnica' => "AISO 15213:2003",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Anaerobios Sulfito reductores " ,
            'tecnica' => "APHA-AWWA-WPCF 9222.G, ISO 7251:2005",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Escherichia coli O 157:H7" ,
            'tecnica' => "ICMSF",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Listeria Monocitógenes" ,
            'tecnica' => "AOAC 2002.09",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Pseudomonas aeruginosa" ,
            'tecnica' => " Iso 16266:2006",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Recuento de hongos y levaduras" ,
            'tecnica' => "ISO 7954:1987",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Salmonella spp" ,
            'tecnica' => "ISO 6579: 2002, APHA-AWWA-WPCF 9260B",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Shigella" ,
            'tecnica' => "ICMSF, APHA-AWWA-WPCF 9260E",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Staphylococcus aureus" ,
            'tecnica' => "ISO 6888-1: 1999",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Staphylococcus aureus coagulasa positiva" ,
            'tecnica' => "ISO 6888-1: 1999",
            'estado' => "habilitado",
            'tipo' => "microbiologico"

        ]);


      
      //TECNICAS ESPECIALES



       DB::table('determinaciones')->insert([
            'determinacion' =>"GC-MS    " ,
            'tecnica' => "Compuestos orgánicos volátiles- EPA Método 8260C",
            'estado' => "habilitado",
            'tipo' => "tecnicas_especiales"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"HPLC" ,
            'tecnica' => "Perfiles de compuestos antioxidantes, vitamina C, cafeína, sorbatos y benzoatos.",
            'estado' => "habilitado",
            'tipo' => "tecnicas_especiales"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"DSC(Calorímetro Diferencial de Barrido" ,
            'tecnica' => "Estudio  de transiciones de fase en bio-materiales (Tg, temperatura de cristalización vítrea, transición, retrogradación de almidones, oxidación de ácidos grasos, desnaturalización de proteínas, etc.)",
            'estado' => "habilitado",
            'tipo' => "tecnicas_especiales"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Texturómetro" ,
            'tecnica' => "Análisis por TPA",
            'estado' => "habilitado",
            'tipo' => "tecnicas_especiales"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"PCR" ,
            'tecnica' => "Genotipificación de cepas de microorganismos",
            'estado' => "habilitado",
            'tipo' => "tecnicas_especiales"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Análisis sensorial" ,
            'tecnica' => "Con paneles entrenados y con consumidores",
            'estado' => "habilitado",
            'tipo' => "tecnicas_especiales"

        ]);
       DB::table('determinaciones')->insert([
            'determinacion' =>"Estudios de vida útil" ,
            'tecnica' => "Ensayos acelerados y caracterización físico química, microbiológica y sensorial",
            'estado' => "habilitado",
            'tipo' => "tecnicas_especiales"

        ]);
       







    }
}
