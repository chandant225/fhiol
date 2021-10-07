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
            'office_time' => 'Sun - Fri : 09:00 - 18:30',
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

        // Footer
        appSettings()->set([
            'footer_column_one' => '<h4 class="footer-title">Who We Are </h4>
                <p class="fontresize">
                    <strong>Fred Hollows</strong> offers a complete range of eye care services including
                    <strong>LASIK and PRK</strong> refractive surgery, eye exams, vision testing for glasses
                    and contacts Lenses.
                </p>',

            'footer_column_two' => '<h4 class="footer-title">Contact Details </h4>
                <ul class="footer-call">
                    <li><i class="material-icons me-2">add_location</i><span class="fontresize ">GPO Box 561, Kathmandu, Nepal</span></li>
                    <li><i class="material-icons me-2">phone</i>+977-1-4493775<br></li>
                    <li><i class="material-icons me-2">event_available</i> tilganga@tilganga.org</li>
                </ul>',

            'footer_column_three' => ' <h4 class="footer-title"> QuickLlinks </h4>
                <div class="clearfix">
                    <ul class="list-type1">
                        <li><a href="/publication">Distribution</a></li>
                        <li><a href="/products">Products</a></li>
                        <li><a href="/publication">Published Articles</a></li>
                        <li><a href="/new-and-events">News & Events</a></li>
                    </ul>
                </div>'
        ]);
    }
}
