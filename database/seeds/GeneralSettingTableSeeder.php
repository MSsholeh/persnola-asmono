<?php

use App\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingTableSeeder extends Seeder
{
    public function run()
    {

        $s = GeneralSetting::create([
            'website_name'     => 'Asmono Wikan',
            'website_logo' => 'assets/img/asmono-logo.png',
            'website_favicon' => 'assets/img/asmono-favicon.png',
            'keyword'    => 'codensia, startup, development, website, aplikasi, yogyakarta',
            'metatext'  => 'Codenesia merupakan salah satu perusahaan yang bergerak di bidang IT, pengembangan website dan pembuatan konten kreatif yang dapat membantu memudahkan pengelolaan bisnis. Didirikan pada tahun 2018 di Yogyakarta, Codenesia didukung dengan semangat muda dan keinginan untuk memberikan dampak positif di bidang IT baik dalam skala nasional maupun internasional. Sadar akan pertumbuhan teknologi yang terus berkembang, Codenesia selalu mengikuti perkembangan teknologi terbaru untuk meningkatkan kualitas perusahaan.',

            'about_name'    => 'Asmono Wikan',
            'about_photo'   => 'assets/img/asmono-banner1.png',
            'about_image'   => 'assets/img/asmono-image.jpg',
            'about_caption' => 'Founder & Chairman MAW Talk',
            'email'         => 'info@asmonowikan.com',
            'address'       => 'Jl. Kaliurang KM.13, Sleman, Yogyakarta',

            'facebook'  => 'https://facebook.com/muh.s.sholeh',
            'linkedin'  => 'https://linkedin.com/in/mssholeh',
            'instagram' => 'https://instagram.com/asmonowikan',

        ]);
        $s->save();
    }
}
