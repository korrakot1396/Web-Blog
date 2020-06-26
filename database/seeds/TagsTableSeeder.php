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
                'title' => 'Laravel เป็น PHP Framework รูปแบบ MVC และเป็นที่นิยมใช้มากของนักพัฒนาเระบบ',
                'meta_description'  => 'หรือเว็บแอพพลิเคชั่นในปัจจุบันเพราะมีความสามรถที่ช่วยในการทำงานให้ง่ายและเป็นระเบียบมากขึ้นซึ่งพัฒนาโดยทีม Taylor Otwell',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Html',
                'title' => 'HTML เป็นภาษาประเภท Markup Language ที่ใช้ในการสร้างเว็บเพจ ',
                'meta_description'  => 'ย่อมาจาก Hyper Text Markup Language',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Javascript',
                'title' => 'JavaScript เป็น ภาษาสคริปต์เชิงวัตถุ',
                'meta_description'  => 'ที่เราเรียกว่าสคริปต์ ซึ่งใช้ร่วมกับ Html ในการสร้างและพัฒนาเว็บไซต์ของเรานั้น เพื่อให้เว็บไซต์ดูมีการเคลื่อนไหวต่างๆ สามารถตอบสนองต่อผู้ใช้งาน ทำให้เหมือนว่าเว็บไซต์นั้นมีชีวิต',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Css',
                'title' => 'CSS เป็น ภาษาที่ใช้สำหรับตกแต่งเอกสาร HTML/XHTML',
                'meta_description'  => 'ให้มีหน้าตา สีสัน ระยะห่าง พื้นหลัง เส้นขอบและอื่นๆ ตามที่ต้องการ CSS ย่อมาจาก Cascading Style Sheets',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Java',
                'title' => 'Java เป็นโปรแกรมภาษาที่ถูกพัฒนามาเพื่อรองรับการออกแบบซอฟแวร์ที่มีการเชื่อมโยง Internet',
                'meta_description'  => 'อีกทั้งยังเป็นโปรแกรมที่สนับสนุนแนวความคิดของการเขียนโปรแกรมเชิงวัตถุ หรือที่รู้จักกันดีที่เรียกว่า OOP (Object-Oriented Programming)',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Php',
                'title' => 'PHP เป็นภาษาสคริปต์ (Scripting Language) คำสั่งต่างๆจะเก็บในรูปของข้อความ Text',
                'meta_description'  => 'อาจเขียนแทรกอยู่ภายในภาษา HTML หรือใช้งานอิสระก็ได้ แต่ในการใช้งานจริงมักใช้งานร่วมกับภาษา HTML ',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Golang',
                'title' => 'Golang เป็น Open Source ที่นิยามว่า รันง่าย เชื่อถือได้ และ มีประสิทธิภาพ',
                'meta_description'  => 'พูดง่ายๆ คือมันเร็ว กว่าภาษาอื่นๆ ทั่วๆไป และตัวมันเองก็เบามาก เวลานำมาเขียนโปรแกรม',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Python',
                'title' => '',
                'meta_description'  => '',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'Ruby',
                'title' => '',
                'meta_description'  => '',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'C++',
                'title' => '',
                'meta_description'  => '',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'tag' => 'C#',
                'title' => '',
                'meta_description'  => '',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
        ];

        DB::table('tags')->insert($tags);

        // factory(Tag::class, 5)->create();

    }
}
