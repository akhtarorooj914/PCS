<?php

namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [
            131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 144, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158
        ];

        $lgas = [
            'Amaravati', 'Itanagar', 'Dispur', 'Patna', 'Raipur', 'Panaji', 'Gandhinagar', 'Chandigarh', 'Shimla', 'Ranchi', 'Bangalore', 'Thiruvananthapuram', 'Bhopal', 'Mumbai', 'Pune', 'Nagpur', 'Imphal', 'Shillong', 'Aizawl', 'Kohima', 'Bhubaneswar', 'Chandigarh', 'Jaipur', 'Gangtok', 'Chennai', 'Hyderabad', 'Agartala', 'Lucknow', 'Dehradun', 'Kolkata'
        ];

        for ($i = 0; $i < count($lgas); $i++) {
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }
}
