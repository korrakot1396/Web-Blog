<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'tag' => 'Laravel',
                'title' => 'Laravel เป็น Php framework',
                'meta_description'  => 'Laravel เป็น Php framework',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Html',
                'title' => 'Laravel เป็น Php framework',
                'meta_description'  => 'Laravel เป็น Php framework',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Javascript',
                'title' => 'Laravel เป็น Php framework',
                'meta_description'  => 'Laravel เป็น Php framework',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Css',
                'title' => 'Laravel เป็น Php framework',
                'meta_description'  => 'Laravel เป็น Php framework',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Java',
                'title' => 'Laravel เป็น Php framework',
                'meta_description'  => 'Laravel เป็น Php framework',
                'created_at'  => now(),
                'updated_at'  => now()
            ]
        ];

        DB::table('tags')->insert($tags);

        // factory(Tag::class, 5)->create();

    }
}
