<?php

use Illuminate\Database\Seeder;

class HomepageSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        appSettings()->set([
            'hp_our_excellence_section_title' => 'Our Excellence',

            'hp_our_excellence_one_title' => 'LATEST MACHINES',
            'hp_our_excellence_one_icon' => '<span class="material-icons orange600">precision_manufacturing</span>',
            'hp_our_excellence_one_desc' => ' Equipped with the latest innovation in computer controlled lens production equipment with...',
            'hp_our_excellence_one_link' => 'nullable',

            'hp_our_excellence_two_title' => 'BEST IOL DESIGNS',
            'hp_our_excellence_two_icon' => '<span class="material-icons orange600">biotech</span>',
            'hp_our_excellence_two_desc' => 'Having alliance with leading IOL design experts and medical research teams, the laboratory is in...',
            'hp_our_excellence_two_link' => 'nullable',

            'hp_our_excellence_three_title' => 'QUALITY CERTIFICATION',
            'hp_our_excellence_three_icon' => '<span class="material-icons orange600">approval</span>',
            'hp_our_excellence_three_desc' => 'Adherence to the Highest Quality Standards is a consistent feature...',
            'hp_our_excellence_three_link' => 'nullable',

            'hp_our_excellence_four_title' => 'Over 30 countries',
            'hp_our_excellence_four_icon' => '<span class="material-icons orange600">flight_takeoff</span>',
            'hp_our_excellence_four_desc' => 'FHIOL Lab has exported its products world-wide to over 30 countries in Asia, Australia, South...',
            'hp_our_excellence_four_link' => 'nullable',
        ]);
    }
}
