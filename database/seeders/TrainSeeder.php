<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $trains = [
            [
                'company' => 'Italo',
                'departure_station' => 'Stazione di Padova',
                'arrival_station' => 'Stazione di Milano',
                'departure_time' => '19:00',
                'arrival_time' => '21:30',
                'train_code' => '234',
                'carriages_number' => 4,
                'on_time' => true,
                'is_canceled' => false,
            ],
            [
                'company' => 'TreniItalia',
                'departure_station' => 'Stazione di Firenze',
                'arrival_station' => 'Stazione di Roma Termini',
                'departure_time' => '15:45',
                'arrival_time' => '18:20',
                'train_code' => '567',
                'carriages_number' => 5,
                'on_time' => false,
                'is_canceled' => true,
            ],
            [
                'company' => 'TrenNord',
                'departure_station' => 'Stazione di Bologna',
                'arrival_station' => 'Stazione di Napoli',
                'departure_time' => '12:30',
                'arrival_time' => '15:45',
                'train_code' => '456',
                'carriages_number' => 3,
                'on_time' => true,
                'is_canceled' => false,
            ]
        ];

        foreach ($trains as $train){
        $new_train = new Train();
        $new_train->fill($train);
        $new_train->save();
        }
    }
}
