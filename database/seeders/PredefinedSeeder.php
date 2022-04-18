<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institution;
use App\Models\Sensors;
use App\Models\TranInstitutionSensors;
use Illuminate\Support\Facades\Hash;

class PredefinedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        //inserting privilege absensi
        // $data_privilege = Privilege::create(
        // [
        //     'name' => 'view_absensi',
        //     'description' => 'view menu absensi'
        // ]);

        // $data_privilege->save();
        // $privilege_id = $data_privilege->id;
         

        //inserting institution
        $data_institution = [
        [
            'name' => 'Kementerian Dalam Negeri',
            'coordinate' => '-6.170507740261105, 106.82773946819282',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kementerian ATR-BPN',
            'coordinate' => '-6.1856534542044255, 106.82480894187255',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kementerian Pariwisata dan Ekonomi Kreatif',
            'coordinate' => '-6.179032331954567, 106.82160032588044',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kementerian Pendidikan dan Kebudayaan',
            'coordinate' => '-6.225332577407092, 106.80261422252667',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kemenko PMK',
            'coordinate' => '-6.172288462485868, 106.82244977005587',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kementerian Perhubungan',
            'coordinate' => '-6.1741943639167545, 106.82225196821011',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kementerian PUPR',
            'coordinate' => '-6.237172927663409, 106.80192742403506',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kementarian PPA',
            'coordinate' => '-6.178461632197639, 106.82121498355063',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Kemenko Maritim dan Investasi',
            'coordinate' => '-6.184708334964276, 106.82273955286983',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Lembaga Administrasi Negara',
            'coordinate' => '-6.201689672719892, 106.80661345471565',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Badan Nasional Penanggulangan Terorisme',
            'coordinate' => '-6.517317097761564, 106.87431254351961',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'BKKBN',
            'coordinate' => '-6.237447520189781, 106.87807750564524',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Ombudsman',
            'coordinate' => '-6.219027121754333, 106.83192369704555',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Komisi Pemilihan Umum',
            'coordinate' => '-6.197812330034401, 106.82780364891921',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Dewan Perwakilan Rakyat',
            'coordinate' => '-6.209664098801186, 106.80003661511721',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Dewan Perwakilan Daerah',
            'coordinate' => '-6.208059249846761, 106.80003939704542',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Australia',
            'coordinate' => '-35.30375684136404, 149.11666037055042',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI China',
            'coordinate' => '39.94147389903389, 116.44810006884185',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Papua Nugini',
            'coordinate' => '-9.433649289503629, 147.1918808735932',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Jerman',
            'coordinate' => '52.52943219404731, 13.363255572330557',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Arab Saudi',
            'coordinate' => '24.68169643579396, 46.62450491628028',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Yordania',
            'coordinate' => '31.94750926149184, 35.87394394610568',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Oman',
            'coordinate' => '23.59681745561638, 58.43417424892726',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KDEI Taiwan',
            'coordinate' => '25.079788996115013, 121.56693922994151',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Belanda',
            'coordinate' => '52.08614092443111, 4.288724561308946',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Malaysia',
            'coordinate' => '3.146792897154829, 101.7218490940336',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Amerika Serikat',
            'coordinate' => '38.910271638777054, -77.04628113960801',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Mesir',
            'coordinate' => '30.034884402397687, 31.23101928381776',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Thailand',
            'coordinate' => '13.751274082753195, 100.53655242289118',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Filipina',
            'coordinate' => '14.631587495355651, 120.95233280099234',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Singapura',
            'coordinate' => '1.2993020113997658, 103.82275226732429',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Vietnam',
            'coordinate' => '21.021007856630717, 105.8534970679462',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Afganistan',
            'coordinate' => '34.530802786748445, 69.17899461173441',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Rusia',
            'coordinate' => '55.738031965378006, 37.630209929109476',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Pakistan',
            'coordinate' => '33.72245939438508, 73.10387570622397',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI India',
            'coordinate' => '28.60204732604317, 77.19446998197222',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Turki',
            'coordinate' => '39.87017847128933, 32.85580536496218',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Inggris',
            'coordinate' => '51.49695393587146, -0.13094490149028612',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KBRI Korea Selatan',
            'coordinate' => '37.51850159389236, 126.93159227430192',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KJRI Los Angeles',
            'coordinate' => '34.062049554900895, -118.29935462837825',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KJRI Sydney',
            'coordinate' => '-33.942147388186605, 151.244634668503',
            'location' => 'overseas',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Badung',
            'coordinate' => '-8.61789767130842, 115.18862465671651',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kota Denpasar',
            'coordinate' => '-8.673462741625045, 115.23540860704388',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Bengkulu Utara',
            'coordinate' => '-3.4402984232063845, 102.19188497291937',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Bengkulu Tengah',
            'coordinate' => '-3.7038246671301533, 102.41365056576957',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Rejang Lebong',
            'coordinate' => '-3.476452740243076, 102.51724660942612',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Bantul',
            'coordinate' => '-7.899746077091716, 110.3218096642546',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Sleman',
            'coordinate' => '-7.718858194880274, 110.35980859519586',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Bandung',
            'coordinate' => '-7.035136767959557, 107.53995148841969',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Indramayu',
            'coordinate' => '-6.3538145765177525, 108.32598957450435',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Merangin',
            'coordinate' => '-2.0878443993455567, 102.25499039664439',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Tanjung Jabung Barat',
            'coordinate' => '-0.8269194763226856, 103.46313145050662',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Tanjung Jabung Timur',
            'coordinate' => '-1.2121392642326063, 103.7940855817891',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kota Jambi',
            'coordinate' => '-1.6176406386749036, 103.55388175938144',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kota Semarang',
            'coordinate' => '-6.983120941168859, 110.41006221593963',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kota Surakarta',
            'coordinate' => '-7.547034796943664, 110.80857665511643',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Lamongan',
            'coordinate' => '-7.119734931495684, 112.4048953123289',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Malang',
            'coordinate' => '-8.138573759091418, 112.57312881566355',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Mojokerto',
            'coordinate' => '-7.489965759874696, 112.42797638182026',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Pacitan',
            'coordinate' => '-8.190827149009916, 111.10188219152789',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Sidoarjo',
            'coordinate' => '-7.442752709921801, 112.68638014466913',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kota Tanjung Pinang',
            'coordinate' => '0.9110876123446534, 104.49382150377751',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Lampung Tengah',
            'coordinate' => '-4.89730596626066, 105.036708321077',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Bengkalis',
            'coordinate' => '1.482762350451252, 102.13059335675189',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Kepuluan Meranti',
            'coordinate' => '1.0018408639273504, 102.72830394637582',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Pesisir Selatan',
            'coordinate' => '-1.343489989249854, 100.57931603449791',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Tanah Datar',
            'coordinate' => '-0.47734264240321284, 100.624744086073',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kota Padang',
            'coordinate' => '-0.8891433909998778, 100.40035831709844',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD Kab Oga Komering Ulu',
            'coordinate' => '-4.144662438392883, 104.18006761992126',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bali Kab Bangli',
            'coordinate' => '-8.453798821018298, 115.34925543060427',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bali Kab Jembrana',
            'coordinate' => '-8.355858504407472, 114.6164108528759',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bali Kab Karangasem',
            'coordinate' => '-8.451779190651946, 115.6166469300768',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bali Kab Tabanan',
            'coordinate' => '-8.537012964926992, 115.13530014381065',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Banten Kab Pandeglang',
            'coordinate' => '-6.3088375147460924, 106.10007676581516',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Banten Kab Serang',
            'coordinate' => '-6.111539856883916, 106.15762760071107',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Banten Kota Cilegon',
            'coordinate' => '-6.036176899705537, 106.04962925230127',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Banten Kota Tangerang Selatan',
            'coordinate' => '-6.328413472275218, 106.67348799040117',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bengkulu Provinsi Bengkulu',
            'coordinate' => '-3.8309024241604597, 102.29516905559757',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bengkulu Kab Kaur',
            'coordinate' => '-4.759793099762848, 103.3505972315801',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bengkulu Kabupaten Kepahiang',
            'coordinate' => '-3.62228222045471, 102.56106456974858',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bengkulu Kab Lebong',
            'coordinate' => '-3.1553529468293604, 102.18298304719653',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bengkulu Kab Muko-Muko',
            'coordinate' => '-2.5504208911397703, 101.10528158878729',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bengkulu Kab Seluma',
            'coordinate' => '-4.076356879946475, 102.57369749593141',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Bengkulu Kota Bengkulu',
            'coordinate' => '-3.7614029739684147, 102.30588928159516',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - DIY Kab Gunungkidul',
            'coordinate' => '-7.9401924953502325, 110.59346260124106',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Barat Kab Cianjur',
            'coordinate' => '-6.818397624510454, 107.13856122015876',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Barat Kab Karawang',
            'coordinate' => '-6.274901545041905, 107.27522698513015',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Barat Kab Pangandaran',
            'coordinate' => '-7.365721976542905, 108.21556911677916',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Barat Kab Sukabumi',
            'coordinate' => '-6.894346562946412, 106.7885453042793',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Barat Kab Tasikmalaya',
            'coordinate' => '-7.3469723282728605, 108.12203276357675',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Barat Kota Depok',
            'coordinate' => '-6.371365681995414, 106.83279268331883',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jambi Kab Batanghari',
            'coordinate' => '-1.7180916612463037, 103.2647413736582',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jambi Kab Bungo',
            'coordinate' => '-1.4920207520110806, 102.11758248480845',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jambi Kab Kerinci',
            'coordinate' => '-2.0564504148235083, 101.38853102442374',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jambi Kab Tebo',
            'coordinate' => '-1.468254291977072, 102.44008288714241',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jambi Kota Sungai Penuh',
            'coordinate' => '-2.071007692938732, 101.40158865743486',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Blora',
            'coordinate' => '-6.971478431328726, 111.40969011384696',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Boyolali',
            'coordinate' => '-7.544059815682174, 110.60112333266456',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Demak',
            'coordinate' => '-6.896009024624285, 110.63929842111345',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Grobogan',
            'coordinate' => '-7.083344933306173, 110.9167682658494',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Kebumen',
            'coordinate' => '-7.66865330101137, 109.66842275625072',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Kendal',
            'coordinate' => '-6.92191175297584, 110.19613419911053',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Klaten',
            'coordinate' => '-7.692128586757274, 110.60111667940922',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Pekalongan',
            'coordinate' => '-7.029344235372035, 109.59885734018485',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Pemalang',
            'coordinate' => '-6.902226690926411, 109.38354956120153',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Purworejo',
            'coordinate' => '-7.716030599346096, 110.00865245585882',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Purbalingga',
            'coordinate' => '-7.380981619544849, 109.38209159582699',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Rembang',
            'coordinate' => '-6.722469590000012, 111.34819118632474',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Semarang',
            'coordinate' => '-7.129404153435225, 110.40892694793108',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Sragen',
            'coordinate' => '-7.416919869156529, 111.02819428769803',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Sukoharjo',
            'coordinate' => '-7.687857060091064, 110.83156177212136',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Wonogiri',
            'coordinate' => '-7.806920336358905, 110.91230273503557',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kab Wonosobo',
            'coordinate' => '-7.357252921150389, 109.90570285719397',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kota Magelang',
            'coordinate' => '-7.483368023993509, 110.21417768641078',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Tengah Kota Pekalongan',
            'coordinate' => '-6.895307326140664, 109.66024809444471',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Banyuwangi',
            'coordinate' => '-8.228247355157604, 114.36089471329014',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Blitar',
            'coordinate' => '-8.072912492058952, 112.22188511168903',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Gresik',
            'coordinate' => '-7.166025505314054, 112.61136529609333',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Jember',
            'coordinate' => '-8.16518834988088, 113.71244443796188',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Kediri',
            'coordinate' => '-7.80741111435855, 112.04204835821199',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Ngawi',
            'coordinate' => '-7.392216084733088, 111.45153692560159',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Ponorogo',
            'coordinate' => '-7.84920223435007, 111.47374234722677',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Sitobondo',
            'coordinate' => '-7.710885516246102, 114.00688721772693',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Sumenep',
            'coordinate' => '-7.001423189992407, 113.84702385256135',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Trenggalek',
            'coordinate' => '-8.055914095397222, 111.68915488980159',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kab Tuban',
            'coordinate' => '-6.898480955848191, 112.04550538711972',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kota Blitar',
            'coordinate' => '-8.094434053296167, 112.19130599215488',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kota Pasuruan',
            'coordinate' => '-7.656720974771961, 112.89732861498678',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Jawa Timur Kota Surabaya',
            'coordinate' => '-7.292959805660645, 112.72940187631869',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Riau Kota Batam',
            'coordinate' => '1.1294788769883908, 103.92497613430984',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Lampung Kab Lampung Selatan',
            'coordinate' => '-5.72564877594357, 105.59202302985462',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Lampung Kab Lampung Timur',
            'coordinate' => '-5.053495830035851, 105.50516311522422',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Lampung Kab Pesisir Barat',
            'coordinate' => '-5.2026093258647785, 103.94162795839225',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Lampung Kab Pesawaran',
            'coordinate' => '-5.366641116378198, 105.15010224609571',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Lampung Kab Way Kanan',
            'coordinate' => '-4.504512045352449, 104.51369071428417',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Lampung Kota Bandar Lampung',
            'coordinate' => '-5.385715646366647, 105.3036329013891',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Lampung Kota Metro',
            'coordinate' => '-5.128176191811174, 105.3069354503199',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Riau Kab Indragiri Hulu',
            'coordinate' => '-0.38245735578510043, 102.44233836585683',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Riau Kab Kuantan Singingi',
            'coordinate' => '-0.5319483899812548, 101.5828947261887',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Riau Kab Rokan Hilir',
            'coordinate' => '2.117873462435101, 100.82224114184339',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Riau Kab Rokan Hulu',
            'coordinate' => '0.8658772705349067, 100.29592625986157',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Riau Kab Siak',
            'coordinate' => '0.8150130372567892, 102.02269304111303',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Riau Kota Dumai',
            'coordinate' => '1.6064761645470256, 101.3887260855771',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kota Tomohon',
            'coordinate' => '1.336495732704816, 124.83655304941394',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Prov Sumatera Barat',
            'coordinate' => '-0.9161404950576596, 100.35703653510811',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Agam',
            'coordinate' => '-0.3954603977604488, 100.27551621850107',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Dharmasraya',
            'coordinate' => '-0.9539212579446129, 101.49348158727092',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Kepulauan Mentawai',
            'coordinate' => '-2.0662912406952074, 99.59468722567175',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Lima Puluh Kota',
            'coordinate' => '-0.1834621927702017, 100.6559841349023',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Pasaman',
            'coordinate' => '0.13971911435906972, 100.16595676217219',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Pasaman Barat',
            'coordinate' => '0.10743779211911401, 99.82932932028346',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Sijunjung',
            'coordinate' => '-0.6625556804437956, 100.92633172946353',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Solok',
            'coordinate' => '-0.8301658311634421, 100.65326202060832',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Solok Selatan',
            'coordinate' => '-1.5602749547726376, 101.23366813874568',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kab Bukit Tinggi',
            'coordinate' => '-0.30266429728267386, 100.3696955227787',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kota Padang Panjang',
            'coordinate' => '-0.46683003364809916, 100.40926498767561',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kota Solok',
            'coordinate' => '-0.7683998449620932, 100.65624185753926',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Barat Kota Sawah Lunto',
            'coordinate' => '-0.6456482801684749, 100.7455044170267',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Selatan Kab Musi Rawas',
            'coordinate' => '-3.2427777202714823, 103.03815078871034',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Selatan Kab Musi Rawas Utara',
            'coordinate' => '-2.814732745413356, 102.83367780630043',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Selatan Kab Ogan ilir',
            'coordinate' => '-3.393093041015603, 104.83018856399943',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Selatan Kab Panungkal Abab Lematang Hilir',
            'coordinate' => '-3.2878910811571123, 103.84174243110107',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Bangka Belitung Kab Bangka Selatan',
            'coordinate' => '-3.0100711006928162, 106.47691768360045',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Bangka Belitung Kab Bangka Tengah',
            'coordinate' => '-2.518833778346143, 106.41711193917735',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Bangka Belitung Kab Belitung Timur',
            'coordinate' => '-2.8841959203122713, 108.23693756635973',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Gorontalo Kab Bone Bolango',
            'coordinate' => '0.5495895777190639, 123.14000489924346',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Gorontalo Kab Gorontalo',
            'coordinate' => '0.6292725127414015, 122.9749723596326',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Barat Kab Melawi',
            'coordinate' => '-0.37608696335924674, 111.76765095986627',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Barat Kab Sambas',
            'coordinate' => '1.3622712333065883, 109.30347068401731',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Barat Kab Sekadau',
            'coordinate' => '0.00965480775099986, 110.95528049610495',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Balangan',
            'coordinate' => '-2.374105316122864, 115.46523003597481',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Banjar',
            'coordinate' => '-3.4195432950989018, 114.85107153103772',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Barito Kuala',
            'coordinate' => '-2.9827706136703207, 114.73484172398355',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Hulu Sungai Tengah',
            'coordinate' => '-2.579650172115521, 115.38453510073379',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Hulu Sungai Utara',
            'coordinate' => '-2.41848412924932, 115.25323133129405',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Kota Baru',
            'coordinate' => '-3.2568509167621156, 116.2096285275035',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Tabalong',
            'coordinate' => '-2.1719406749510854, 115.4051541998033',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Tanah Bumbu',
            'coordinate' => '-3.4850235139809587, 115.9544673642482',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Tanah Laut',
            'coordinate' => '-3.80186953773342, 114.78477029574267',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Tapin',
            'coordinate' => '-2.930670946741869, 115.16954289480717',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kota Banjarmasin',
            'coordinate' => '-3.2892816911756944, 114.58823945629989',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kota Banjar Baru',
            'coordinate' => '-3.4626604912345815, 114.81463531558092',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Barito Selatan',
            'coordinate' => '-1.7229879770732037, 114.84035025858499',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Barito Timur',
            'coordinate' => '-2.114064153941744, 115.16804194936151',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Barito Utara',
            'coordinate' => '-0.9482125927034977, 114.89963150704124',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Gunung Mas',
            'coordinate' => '-1.1247017677032511, 113.8576433991661',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Murung Raya',
            'coordinate' => '-0.6261024325993976, 114.55795896720461',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Seruyan',
            'coordinate' => '-3.407381920977105, 112.54587586676573',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Sukamara',
            'coordinate' => '-2.762529025541832, 111.1786984126961',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kota Palangkaraya',
            'coordinate' => '-2.1960436184955796, 113.89839450926586',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kab Kutai Kartanegara',
            'coordinate' => '-0.450949956608571, 117.00115615530844',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kab Kutai Timur',
            'coordinate' => '0.5136895548236432, 117.59848907017822',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kab Mahakam Hulu',
            'coordinate' => '0.5469178601814478, 115.20958528777427',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kota Balikpapan',
            'coordinate' => '-1.2769183507953712, 116.8096508928459',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kota Samarinda',
            'coordinate' => '-0.4836158019110913, 117.1298916982436',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Utara Kab Bulungan',
            'coordinate' => '2.8402705662823164, 117.37312085662853',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Utara Kab Nunukan',
            'coordinate' => '4.143090557825058, 117.65005629194856',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Utara Kab Tana Tidung',
            'coordinate' => '3.607639958284492, 116.9026628388186',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Utara Kota Tarakan',
            'coordinate' => '3.3079742711835847, 117.61278409532191',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Riau Kab Karimun',
            'coordinate' => '1.0183026029633517, 103.4059620025761',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Riau Kab Kepulauan Anambas',
            'coordinate' => '3.222989505018984, 106.21233506802935',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Maluku Utara Kota Ternate',
            'coordinate' => '0.7691592357524818, 127.36164920728585',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Barat Kab Bima',
            'coordinate' => '-8.515559095779174, 118.69877663533293',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Barat Kab Dompu',
            'coordinate' => '-8.537779326550705, 118.4659454924247',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Barat Kab Lombok Utara',
            'coordinate' => '-8.321275672893448, 116.19859280943007',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Barat Kab Sumbawa',
            'coordinate' => '-8.47716893145099, 117.4058844547264',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Barat Kab Sumbawa Barat',
            'coordinate' => '-8.774390231921792, 116.82504473821086',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Barat Kota Mataram',
            'coordinate' => '-8.619811427347662, 116.08757149500863',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Belu',
            'coordinate' => '-9.105547811213786, 124.87522118066163',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Manggarai',
            'coordinate' => '-8.622024555785812, 120.45157634326048',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Manggarai Barat',
            'coordinate' => '-8.494787420446217, 119.89701318722217',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Ngada',
            'coordinate' => '-8.788135314238477, 120.97260621318613',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Sabu Raijua',
            'coordinate' => '-10.470598851166681, 121.85341260743532',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Sumba Barat',
            'coordinate' => '-9.624017353206696, 119.38989717606462',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Sumba Timur',
            'coordinate' => '-9.661006633994626, 120.26312572782183',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Timor Tengah Utara',
            'coordinate' => '-9.455456769955617, 124.47541738323278',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Papua Barat Kab Raja Ampat',
            'coordinate' => '-0.41857319469955606, 130.83210338958267',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Papua Barat Kab Teluk Bintuni',
            'coordinate' => '-2.126779710799196, 133.59466778532587',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Papua Barat Kab Manokwari',
            'coordinate' => '-0.864641312871739, 134.07530356167186',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Barat Kab Majene',
            'coordinate' => '-3.559689486232474, 118.94354430143497',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Barat Kab Mamuju',
            'coordinate' => '-2.6829224144517965, 118.86502622167565',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Barat Kab Pasangkayu',
            'coordinate' => '-1.1919943355410751, 119.33935424890855',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Gowa',
            'coordinate' => '-5.205466942375495, 119.45177307107244',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Kepulauan Selayar',
            'coordinate' => '-6.118560040499549, 120.46641716311584',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Luwu Timur',
            'coordinate' => '-2.6146313605381817, 121.12130239985699',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Maros',
            'coordinate' => '-5.018248325527061, 119.57444616853576',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Pangkajene dan Kepulauan',
            'coordinate' => '-4.837347826451776, 119.54450629941098',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Toraja Utara',
            'coordinate' => '-2.9750991394512325, 119.9029602690553',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kota Makassar',
            'coordinate' => '-5.168653549273983, 119.48780206218052',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kab Bolaang Mongondow Selatan',
            'coordinate' => '0.381714180707805, 123.98275607399201',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Provinsi Sulawesi Tengah',
            'coordinate' => '-0.8890640539401431, 119.87946468727087',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Banggai Kepulauan',
            'coordinate' => '-1.3195537321592175, 123.29072007145378',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Banggai Laut',
            'coordinate' => '-1.6027251298410827, 123.49892781479129',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Buol',
            'coordinate' => '1.1904394161449148, 121.41893903836099',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Donggala',
            'coordinate' => '-0.677982379479097, 119.74895833386559',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Konawe Selatan',
            'coordinate' => '-3.851068104791619, 122.04365931296047',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Poso',
            'coordinate' => '-1.3970330965662714, 120.75475566628855',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Tolitoli',
            'coordinate' => '1.045262067858983, 120.81832294074972',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kab Kepulauan Talaud',
            'coordinate' => '4.006849811541861, 126.68411743528101',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kab Minahasa Utara',
            'coordinate' => '1.4184980307399624, 124.99070753371609',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kab Minahasa Selatan',
            'coordinate' => '1.1822215901425386, 124.5689560030047',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kab Minahasa Tenggara',
            'coordinate' => '1.040317120295301, 124.79412974833762',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kota Bitung',
            'coordinate' => '1.434919742447398, 125.11620474530112',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kota Kotamobagu',
            'coordinate' => '0.7357728846311122, 124.31585769740839',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kota Manado',
            'coordinate' => '1.4823932549345806, 124.84642520720061',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Provinsi Sumatera Utara',
            'coordinate' => '3.5991168590741762, 98.68318739561049',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Asahan',
            'coordinate' => '2.980947452792489, 99.62305383879149',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Humbang Hasundutan',
            'coordinate' => '2.2881641036343563, 98.71342207274948',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Karo',
            'coordinate' => '3.0979812450898083, 98.4952038893418',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Labuhan Batu',
            'coordinate' => '2.112971566243998, 99.82392423242945',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Labuhan Batu Utara',
            'coordinate' => '2.1128723785501435, 99.8240218305936',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Mandailing Natal',
            'coordinate' => '0.8648605122614252, 99.56295895313023',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Nias',
            'coordinate' => '1.115947404899558, 97.72338277504251',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Nias Selatan',
            'coordinate' => '0.564423233215125, 97.8188313113323',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Pakpak Bharat',
            'coordinate' => '2.4543239318755834, 98.28695285493458',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Samosir',
            'coordinate' => '2.5781396023344505, 98.7135560121007',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Serdang Bedagai',
            'coordinate' => '3.508883083889492, 99.10664961762714',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Toba Samosir',
            'coordinate' => '2.3271219279290527, 99.05138290646437',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Tapanuli Selatan',
            'coordinate' => '1.5390780641693562, 99.29795190221859',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kota Binjai',
            'coordinate' => '3.6032068083263544, 98.47826558493728',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kota Gunungsitoli',
            'coordinate' => '1.2562347273172905, 97.62174649309007',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kota Medan',
            'coordinate' => '3.586800790658883, 98.6688832657899',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kota Sibolga',
            'coordinate' => '1.7439712926967867, 98.77569569500493',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kota Tanjung Balai',
            'coordinate' => '2.950677646773822, 99.78489796028774',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Bangka Belitung Kab Bangka Barat',
            'coordinate' => '-2.062415087782552, 105.16714172266464',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Gorontalo Kab Pahuwato',
            'coordinate' => '0.4588978628441422, 121.9547673849106',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Provinsi Kalimantan Barat',
            'coordinate' => '-0.04006370454946799, 109.33280899918121',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Barat Kab Kapuas Hulu',
            'coordinate' => '0.8872650559007754, 112.92848127969424',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Barat Kab Ketapang',
            'coordinate' => '-1.8317439111841693, 109.97889871996193',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Barat Kab Sintang',
            'coordinate' => '0.06370409401594823, 111.49756799205886',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Selatan Kab Hulu Sungai Selatan',
            'coordinate' => '-2.8079656385772, 115.25876918145096',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Kapuas',
            'coordinate' => '-3.0160575372698535, 114.38475515519008',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Katingan',
            'coordinate' => '-1.8759848447966663, 113.40972090259812',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Kota Waringin Barat',
            'coordinate' => '-2.7074847649946676, 111.64678581857046',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Kota Waringin Timur',
            'coordinate' => '-2.540161549142073, 112.94922818654506',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Lamandau',
            'coordinate' => '-2.1883387495308364, 111.43078915051736',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Tengah Kab Pulang Pisau',
            'coordinate' => '-2.7297568688046527, 114.26907056092337',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kab Berau',
            'coordinate' => '2.1538700749518864, 117.49593295688007',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kab Kutai Barat',
            'coordinate' => '-0.23094892809452636, 115.7038845895359',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kab Paser',
            'coordinate' => '-1.9062251565792974, 116.19063219872424',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Timur Kota Bontang',
            'coordinate' => '0.13794262556275008, 117.49804264832947',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kalimantan Utara Kab Malinau',
            'coordinate' => '3.553328370252759, 116.62488104825053',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Kepulauan Riau Kab Lingga',
            'coordinate' => '-0.20944196420758399, 104.60158302829362',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Barat Kab Lombok Tengah',
            'coordinate' => '-8.703338106521354, 116.26706483823709',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Nusa Tenggara Timur Kab Malaka',
            'coordinate' => '-9.557697232009563, 124.9088242870388',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Papua Kab Merauke',
            'coordinate' => '-8.510958722525922, 140.40733024406845',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Papua Barat Kab Sorong',
            'coordinate' => '-0.975656510643348, 131.34326523409342',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Papua Barat Kota Sorong',
            'coordinate' => '-0.8940854469695355, 131.33207180371673',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Barat Kab Mamuju Tengah',
            'coordinate' => '-2.049869793156196, 119.26530216509882',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Barru',
            'coordinate' => '-4.436419973199611, 119.64990754844528',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Bulukumba',
            'coordinate' => '-5.557345435488132, 120.19493529450853',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Luwu Utara',
            'coordinate' => '-2.5497436182893933, 120.34414397011172',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Soppeng',
            'coordinate' => '-4.366868787735181, 119.8967933105999',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Selatan Kab Tana Toraja',
            'coordinate' => '-3.0958657027708676, 119.85240588006785',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Banggai',
            'coordinate' => '-0.9856977632471443, 122.78397104536367',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Kolaka Timur',
            'coordinate' => '-4.05674699031366, 121.88929609474484',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Morowali',
            'coordinate' => '-2.472078893828035, 121.92032721812323',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Morowali Utara',
            'coordinate' => '-1.9806409805963332, 121.33787044716814',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Parigi Moutong',
            'coordinate' => '-0.7983785616545453, 120.15864915590222',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Sigi',
            'coordinate' => '-1.0353593626630087, 119.88622163013088',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kab Wakatobi',
            'coordinate' => '-5.30900748710212, 123.53490867689995',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Tengah Kota Palu',
            'coordinate' => '-0.900844973128285, 119.89079399629527',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Provinsi Sulawesi Utara',
            'coordinate' => '1.486481759042543, 124.84200125449597',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sulawesi Utara Kab Minahasa',
            'coordinate' => '1.3153667081073628, 124.91401619484076',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Labuhan Batu Selatan',
            'coordinate' => '1.907437215444325, 100.08946602700733',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Nias Barat',
            'coordinate' => '1.002728765878661, 97.49548431873907',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kab Simalungun',
            'coordinate' => '2.9585080775792605, 98.86128142828068',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'KPUD - Sumatera Utara Kota Pematang Siantar',
            'coordinate' => '2.9513106410978263, 99.06294678131891',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Badung',
            'coordinate' => '-8.59772303203932, 115.2389115302524',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Gianyar',
            'coordinate' => '-8.541130888265343, 115.32395781522739',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Madiun',
            'coordinate' => '-7.54131338851482, 111.6533364315491',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Palopo',
            'coordinate' => '-3.008074101664951, 120.20133334766642',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Bogor',
            'coordinate' => '-6.479263561612056, 106.82489613146419',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Bojonegoro',
            'coordinate' => '-7.1502384536447146, 111.88142704615755',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Jombang',
            'coordinate' => '-7.556716475696028, 112.23443796364874',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Lebak',
            'coordinate' => '-6.361025058576828, 106.2461791170512',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Lumajang',
            'coordinate' => '-8.133480160185492, 113.22464503062538',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Magetan',
            'coordinate' => '-7.656361263138224, 111.32924540788478',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Tangerang',
            'coordinate' => '-6.269993335819631, 106.48443398778574',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Batu',
            'coordinate' => '-7.866336552420464, 112.51269142511958',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Bekasi',
            'coordinate' => '-6.235896757454134, 106.99507946965655',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Bogor',
            'coordinate' => '-6.595379007406247, 106.79409895010741',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Kediri',
            'coordinate' => '-7.812452510534252, 112.01432049373025',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Mojokerto',
            'coordinate' => '-7.470178467459516, 112.44043476379629',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Pandeglang',
            'coordinate' => '-6.309735209105018, 106.10492201789604',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Aceh Timur',
            'coordinate' => '4.927513441847617, 97.7875961096287',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Anambas',
            'coordinate' => '3.2148245690829294, 106.24869030293512',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Bangka',
            'coordinate' => '-1.8875553765768074, 106.1045790511288',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Belitung',
            'coordinate' => '-2.742628353854155, 107.65443118888696',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Gianyat',
            'coordinate' => '-8.541130615066471, 115.32396846657069',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Jambi Kota',
            'coordinate' => '-1.629157897079901, 103.60817214547745',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Batang Hari',
            'coordinate' => '-1.7138761653966967, 103.26163168162871',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Buol',
            'coordinate' => '1.1687920864158468, 121.4097162685908',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Kotawaringin Timur',
            'coordinate' => '-2.537717225558183, 112.94098783090982',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Pasuruan',
            'coordinate' => '-7.649215775189858, 112.90535986516817',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Sinjai',
            'coordinate' => '-5.120161894953764, 120.23540703319367',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Sumba Barat',
            'coordinate' => '-9.647339074977554, 119.39400346123351',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Trenggalek',
            'coordinate' => '-8.048903352628349, 111.71057098949048',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Binjai',
            'coordinate' => '3.6029886732226415, 98.48319709866844',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Lamongan',
            'coordinate' => '-7.121318948177164, 112.41537211403218',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Langsa',
            'coordinate' => '4.4691595393186265, 97.96641960777114',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Manado',
            'coordinate' => '1.4843215814966486, 124.84919284282213',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Pangkalpinang',
            'coordinate' => '-2.141011441129344, 106.11589194409542',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Seluma',
            'coordinate' => '-4.077639576033073, 102.55628172217173',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Solok Selatan',
            'coordinate' => '-1.5564983140550552, 101.23952379017696',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Tulungagung',
            'coordinate' => '-8.066175350988608, 111.90271116147385',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Probolinggo',
            'coordinate' => '-7.753994627902731, 113.21426817293788',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Sukabumi',
            'coordinate' => '-6.989075960408222, 106.5507673503508',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Halmahera Utara',
            'coordinate' => '1.7281474481278476, 127.99218771628247',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Malang',
            'coordinate' => '-7.978074999999997, 112.63388358199592',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Tangerang',
            'coordinate' => '-6.170851541358616, 106.64031321589437',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Bolaang Mongondow',
            'coordinate' => '0.870315783006351, 124.02442511377761',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Gorontalo',
            'coordinate' => '0.5318817393908114, 123.05951624090983',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Jembrana',
            'coordinate' => '-8.35667371263834, 114.63676767753815',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Bekasi',
            'coordinate' => '-6.366215460607897, 107.17289591418384',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Bolaang Mongondow Timur',
            'coordinate' => '0.768299307661041, 124.61322839103502',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Fakfak',
            'coordinate' => '-2.928886603543296, 132.29363221567124',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Malang',
            'coordinate' => '-8.141509074361487, 112.57074573716129',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Sigi',
            'coordinate' => '-1.057791983972709, 119.95389765122682',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Batam',
            'coordinate' => '1.1276684116867068, 104.05547190717229',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Kotamobagu',
            'coordinate' => '0.7429935925258819, 124.31261019667899',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Maluku Tengah',
            'coordinate' => '-3.3042896892874167, 128.95410329083376',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Musi Rawas Utara',
            'coordinate' => '-2.7353653216373965, 102.9015563058943',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Pacitan',
            'coordinate' => '-8.192869384595848, 111.10351060196643',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Ponorogo',
            'coordinate' => '-7.8699940022586725, 111.46275541098862',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kota Semarang',
            'coordinate' => '-6.982161815406367, 110.4127245728375',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Situbondo',
            'coordinate' => '-7.707570483401502, 114.00173071612727',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Subang',
            'coordinate' => '-6.571544998162861, 107.76239643161809',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Sungai Penuh',
            'coordinate' => '-2.070930199097722, 101.39608446006353',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Tanah Datar',
            'coordinate' => '-0.4744678930871217, 100.62345606469515',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Tana Toraja',
            'coordinate' => '-3.0867377969572325, 119.85702729619587',
            'location' => 'domestic',
            'description' => 'Test'
        ],
        [
            'name' => 'Pemerintah Kabupaten Kepahiang',
            'coordinate' => '-3.6252659283313013, 102.5562558009763',
            'location' => 'domestic',
            'description' => 'Test'
        ]];

        Institution::insert($data_institution);


        //inserting sensors
        $data_sensors = [
        [
            "name" => 'Forcepoint',
            "description" => 'test'
        ],
        [
            "name" => 'FireEye',
            "description" => 'test'
        ],
        [
            "name" => 'Palo Alto',
            "description" => 'test'
        ],
        [
            "name" => 'Fortinet',
            "description" => 'test'
        ]];   

        Sensors::insert($data_sensors);   
        

        //inserting tran_institution_sensors
        $sensors_id_forcepoint = Sensors::where('name', 'Forcepoint')->first()->id;
        $sensors_id_fireeye = Sensors::where('name', 'FireEye')->first()->id;
        $sensors_id_paloalto = Sensors::where('name', 'Palo Alto')->first()->id;
        $sensors_id_fortinet = Sensors::where('name', 'Fortinet')->first()->id;

        $institution_id = Institution::where('name', 'Kementerian Dalam Negeri')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kementerian ATR-BPN')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kementerian Pariwisata dan Ekonomi Kreatif')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kementerian Pendidikan dan Kebudayaan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kemenko PMK')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kementerian Perhubungan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kementerian PUPR')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kementarian PPA')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Kemenko Maritim dan Investasi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Lembaga Administrasi Negara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Badan Nasional Penanggulangan Terorisme')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'BKKBN')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Ombudsman')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_forcepoint]);

        $institution_id = Institution::where('name', 'Komisi Pemilihan Umum')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fireeye]);

        $institution_id = Institution::where('name', 'Dewan Perwakilan Rakyat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fireeye]);

        $institution_id = Institution::where('name', 'Dewan Perwakilan Daerah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KBRI Australia')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI China')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Papua Nugini')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Jerman')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Arab Saudi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Yordania')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Oman')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KDEI Taiwan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Belanda')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Malaysia')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Amerika Serikat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Mesir')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Thailand')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Filipina')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Singapura')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Vietnam')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Afganistan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Rusia')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Pakistan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI India')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Turki')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Inggris')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KBRI Korea Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KJRI Los Angeles')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KJRI Sydney')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_paloalto]);

        $institution_id = Institution::where('name', 'KPUD Kab Badung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kota Denpasar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Bengkulu Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Bengkulu Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Rejang Lebong')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Bantul')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Sleman')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Bandung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Indramayu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Merangin')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Tanjung Jabung Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Tanjung Jabung Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kota Jambi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kota Semarang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kota Surakarta')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Lamongan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Malang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Mojokerto')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Pacitan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Sidoarjo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kota Tanjung Pinang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Lampung Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Bengkalis')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Kepuluan Meranti')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Pesisir Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Tanah Datar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kota Padang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD Kab Oga Komering Ulu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bali Kab Bangli')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bali Kab Jembrana')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bali Kab Karangasem')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bali Kab Tabanan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Banten Kab Pandeglang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Banten Kab Serang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Banten Kota Cilegon')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Banten Kota Tangerang Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bengkulu Provinsi Bengkulu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bengkulu Kab Kaur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bengkulu Kabupaten Kepahiang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bengkulu Kab Lebong ')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bengkulu Kab Muko-Muko')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bengkulu Kab Seluma')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Bengkulu Kota Bengkulu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - DIY Kab Gunungkidul')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Barat Kab Cianjur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Barat Kab Karawang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Barat Kab Pangandaran')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Barat Kab Sukabumi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Barat Kab Tasikmalaya')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Barat Kota Depok')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jambi Kab Batanghari')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jambi Kab Bungo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jambi Kab Kerinci')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jambi Kab Tebo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jambi Kota Sungai Penuh')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Blora')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Boyolali')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Demak')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Grobogan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Kebumen')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Kendal')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Klaten')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Pekalongan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Pemalang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Purworejo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Purbalingga')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Rembang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Semarang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Sragen')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Sukoharjo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Wonogiri')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kab Wonosobo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kota Magelang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Tengah Kota Pekalongan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Banyuwangi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Blitar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Gresik')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Jember')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Kediri')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Ngawi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Ponorogo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Sitobondo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Sumenep')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Trenggalek')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kab Tuban')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kota Blitar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kota Pasuruan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Jawa Timur Kota Surabaya')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Riau Kota Batam')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Lampung Kab Lampung Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Lampung Kab Lampung Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Lampung Kab Pesisir Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Lampung Kab Pesawaran')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Lampung Kab Way Kanan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Lampung Kota Bandar Lampung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Lampung Kota Metro')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Riau Kab Indragiri Hulu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Riau Kab Kuantan Singingi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Riau Kab Rokan Hilir')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Riau Kab Rokan Hulu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Riau Kab Siak')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Riau Kota Dumai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kota Tomohon')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Prov Sumatera Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Agam')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Dharmasraya')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Kepulauan Mentawai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Lima Puluh Kota')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Pasaman')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Pasaman Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Sijunjung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Solok')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Solok Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kab Bukit Tinggi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kota Padang Panjang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kota Solok')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Barat Kota Sawah Lunto')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Selatan Kab Musi Rawas')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Selatan Kab Musi Rawas Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Selatan Kab Ogan ilir')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Selatan Kab Panungkal Abab Lematang Hilir')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Bangka Belitung Kab Bangka Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Bangka Belitung Kab Bangka Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Bangka Belitung Kab Belitung Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Gorontalo Kab Bone Bolango')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Gorontalo Kab Gorontalo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Barat Kab Melawi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Barat Kab Sambas')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Barat Kab Sekadau')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Balangan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Banjar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Barito Kuala')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Hulu Sungai Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Hulu Sungai Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Kota Baru')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Tabalong')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Tanah Bumbu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Tanah Laut')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Tapin')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kota Banjarmasin')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kota Banjar Baru')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Barito Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Barito Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Barito Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Gunung Mas')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Murung Raya')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Seruyan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Sukamara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kota Palangkaraya')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kab Kutai Kartanegara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kab Kutai Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kab Mahakam Hulu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kota Balikpapan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kota Samarinda')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Utara Kab Bulungan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Utara Kab Nunukan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Utara Kab Tana Tidung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Utara Kota Tarakan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Riau Kab Karimun')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Riau Kab Kepulauan Anambas')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Maluku Utara Kota Ternate')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Barat Kab Bima')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Barat Kab Dompu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Barat Kab Lombok Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Barat Kab Sumbawa')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Barat Kab Sumbawa Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Barat Kota Mataram')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Belu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Manggarai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Manggarai Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Ngada')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Sabu Raijua')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Sumba Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Sumba Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Timor Tengah Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Papua Barat Kab Raja Ampat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Papua Barat Kab Teluk Bintuni')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Papua Barat Kab Manokwari')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Barat Kab Majene')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Barat Kab Mamuju')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Barat Kab Pasangkayu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Gowa')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Kepulauan Selayar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Luwu Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Maros')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Pangkajene dan Kepulauan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Toraja Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kota Makassar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kab Bolaang Mongondow Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Provinsi Sulawesi Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Banggai Kepulauan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Banggai Laut')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Buol')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Donggala')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Konawe Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Poso')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Tolitoli')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kab Kepulauan Talaud')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kab Minahasa Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kab Minahasa Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kab Minahasa Tenggara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kota Bitung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kota Kotamobagu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kota Manado')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Provinsi Sumatera Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Asahan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Humbang Hasundutan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Karo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Labuhan Batu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Labuhan Batu Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Mandailing Natal')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Nias')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Nias Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Pakpak Bharat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Samosir')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Serdang Bedagai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Toba Samosir')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Tapanuli Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kota Binjai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kota Gunungsitoli')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kota Medan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kota Sibolga')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kota Tanjung Balai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Bangka Belitung Kab Bangka Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Gorontalo Kab Pahuwato')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Provinsi Kalimantan Barat ')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Barat Kab Kapuas Hulu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Barat Kab Ketapang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Barat Kab Sintang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Selatan Kab Hulu Sungai Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Kapuas')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Katingan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Kota Waringin Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Kota Waringin Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Lamandau')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Tengah Kab Pulang Pisau')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kab Berau')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kab Kutai Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kab Paser')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Timur Kota Bontang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kalimantan Utara Kab Malinau')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Kepulauan Riau Kab Lingga')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Barat Kab Lombok Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Nusa Tenggara Timur Kab Malaka')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Papua Kab Merauke')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Papua Barat Kab Sorong')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Papua Barat Kota Sorong')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Barat Kab Mamuju Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Barru')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Bulukumba')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Luwu Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Soppeng')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Selatan Kab Tana Toraja')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Banggai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Kolaka Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Morowali')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Morowali Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Parigi Moutong')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Sigi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kab Wakatobi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Tengah Kota Palu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Provinsi Sulawesi Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sulawesi Utara Kab Minahasa ')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Labuhan Batu Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Nias Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kab Simalungun')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'KPUD - Sumatera Utara Kota Pematang Siantar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Badung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Gianyar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Madiun')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Palopo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Bogor')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Bojonegoro')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Jombang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Lebak')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Lumajang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Magetan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Tangerang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Batu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Bekasi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Bogor')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Kediri ')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Mojokerto')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Pandeglang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Aceh Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Anambas')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Bangka')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Belitung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Gianyat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Jambi Kota')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Batang Hari')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Buol')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Kotawaringin Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Pasuruan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Sinjai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Sumba Barat')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Trenggalek')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Binjai')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Lamongan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Langsa')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Manado')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Pangkalpinang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Seluma')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Solok Selatan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Tulungagung')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Probolinggo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Sukabumi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Halmahera Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Malang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Tangerang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Bolaang Mongondow')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Gorontalo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Jembrana')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Bekasi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Bolaang Mongondow Timur')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Fakfak')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Malang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Sigi')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Batam')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Kotamobagu')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Maluku Tengah')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Musi Rawas Utara')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Pacitan')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Ponorogo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kota Semarang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Situbondo')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Subang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Sungai Penuh')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Tanah Datar')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Tana Toraja')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);

        $institution_id = Institution::where('name', 'Pemerintah Kabupaten Kepahiang')->first()->id;
        $insert = TranInstitutionSensors::create(['institution_id' => $institution_id,'sensors_id' => $sensors_id_fortinet]);
    }
}
