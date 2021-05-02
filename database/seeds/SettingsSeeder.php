<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // General Settings
        appSettings()->set([
            'site_name' => 'Better Kitchen',
            'tagline' => 'The Ideal Kitchen Partner',
            'site_logo' => null,
            'favicon' => null,

            'show_top_bar' => 'yes',
            'mobile' => '123 456 789',
            'email' => 'info@better.com.np',
            'address' => 'Koteshwor-12, Kathmandu, Nepal',

            'price_unit' => 'Rs.',

            'facebook_url' => 'https://facebook.com',
            'twitter_url' => 'https://twitter.com',
            'youtube_url' => 'https://youtube.com',
            'linkedin_url' => 'https://linkedin.com',
        ]);

        // Page Settings
        appSettings()->set([
            'about_us_page_url' => '',
            'privacy_policy_page_url' => '',
            'terms_and_conditions_page_url' => '',

            'contact_us_section_title' => 'GET IN TOUCH',
            'contact_us_section_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic officiis doloribus soluta? Animi incidunt laboriosam iusto, blanditiis aut ipsa voluptatem?',
        ]);
    }
}
