<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Http\Middleware\Language as LanguageMiddleWare;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['code' => 'ar']);
        Language::create(['code' => 'en']);
        $languages = Language::query()->pluck('code')->toArray();
        LanguageMiddleWare::$all_languages = $languages;
    }
}
