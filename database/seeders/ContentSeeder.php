<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;
use Illuminate\Support\Str;
class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Content::create([
            'name' => str_slug('Social Media in Business'),
            'main_title_header' => 'Social Media in Business',            
            'secondary_title_header' => 'Using Social Media platforms for your business is a great start.',            
            'main_image' => 'WHAT-TO-KNOW-SOCIAL-MEDIA.jpg',
            'content_body_text' => 'Using Social Media platforms for your business is a great start. However, being consistently active can be a tough act to follow. Below, are the following factors you need to',
            'created_by' => 1,
            
            
        ]);

        Content::create([
            'name' => str_slug('Grow Your Small Business Through Social Media'),
            'main_title_header' => 'Grow Your Small Business Through Social Media',
            'secondary_title_header' => 'Facebook is the largest social media platform with more than 1.1 billion  people using the site daily',            
            'main_image' => 'growthroughsocialmedia.jpg',
            'content_body_text' => 'With more than 65 percent of adults using social media today, it’s integral to the success of your small business to be actively present on Facebook and Twitter. While social media is a great way to connect with brand advocates, many small business owners wonder which social networks they should join. To help you decide where to focus your efforts, we compiled a list of the top five social media channels and decoded how they can help you grow your business.',
            'created_by' => 1,           
            
        ]);

        


        
        Content::create([
            'name' => str_slug('How to Use Instagram for Business'),
            'main_title_header' => 'How to Use Instagram for Business',
            'secondary_title_header' => 'Everything you need to know about using Instagram for business — from setting up your account to creating a winning strategy.',            
            'main_image' => 'instagram-for-business.svg',
            'content_body_text' => 'More than one billion people use Instagram every month, and roughly 90% of them follow at least one business. This means  that, in 2021, using Instagram for business is a no-brainer.

            In just over 10 years Instagram has grown from a photo-sharing app to a hub of business activity. Brands can run fundraisers in Instagram Live broadcasts, open shops from their profiles and let people book reservations from their accounts. Updates of new business tools, features and tips in the app have become pretty much routine.
            
            It can be a lot to keep track of though, especially if running an Instagram business account is only one aspect of your job. So we’ve brought everything together here.
            
            Learn how to use Instagram for business, from setting up an account from scratch to measuring your success.',
            'created_by' => 1,           
            
        ]);

        

        


        
    }
}
