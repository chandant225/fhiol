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
            'site_name' => 'The Fred Hollows Intraocular lens Laboratory (FH IOL Lab)',
            'tagline' => 'An Integral Part of Tilganga Eye Center',
            'site_logo' => null,
            'favicon' => null,

            'show_top_bar' => 'yes',
            'mobile' => '+977-1-4493775',
            'email' => 'tilganga@tilganga.org',
            'address' => 'GPO Box 561, Kathmandu, Nepal',

            'price_unit' => 'Rs.',

            'facebook_url' => 'https://www.facebook.com/thefhiol',
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
