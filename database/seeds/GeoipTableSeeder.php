<?php

use Illuminate\Database\Seeder;

class GeoipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geoip')->delete();

        $data =
            [
                [
                    'ip' => '199.163.160.216',
                    'latitude' => '55° 45',
                    'longitude' => '37° 37',
                    'city' => 'Moscow',
                    'country' => 'Russia',
                ],

                [
                    'ip' => '171.55.23.241',
                    'latitude' => '59° 56',
                    'longitude' => '30° 19',
                    'city' => 'St. Petersburg',
                    'country' => 'Russia',
                ],

                [
                    'ip' => '145.218.32.235',
                    'latitude' => '55° 1',
                    'longitude' => '82° 56',
                    'city' => 'Novosibirsk',
                    'country' => 'Russia',
                ],

                [
                    'ip' => '87.154.249.245',
                    'latitude' => '56° 51',
                    'longitude' => '60° 36',
                    'city' => 'Ekaterinburg',
                    'country' => 'Russia',
                ],

                [
                    'ip' => '89.96.39.45',
                    'latitude' => '56° 19',
                    'longitude' => '44° 0',
                    'city' => 'Nizhny Novgorod',
                    'country' => 'Russia',
                ]


            ];

        DB::table('geoip')->insert($data);
    }
}
