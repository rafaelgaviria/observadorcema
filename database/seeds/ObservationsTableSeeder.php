<?php

use Illuminate\Database\Seeder;

class ObservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Observer::create([
            'user_id' => '8',
            'course_id' => '5',
            'rol_id' => '2',
            'creator_id' => '18',
            'observer_type_id' => '2',
            'observer_scene_id' => '4',
            'observer_category_id' => '4',
            'observer_note_id' => '5',
            'observer_code_id' => '25',
            'observation' => 'This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.',
            'state' => '1',
        ]);
        App\Observer::create([
            'user_id' => '1',
            'course_id' => '10',
            'rol_id' => '2',
            'creator_id' => '12',
            'observer_type_id' => '2',
            'observer_scene_id' => '4',
            'observer_category_id' => '4',
            'observer_note_id' => '5',
            'observer_code_id' => '30',
            'observation' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. ',
            'state' => '1',
        ]);
        App\Observer::create([
            'user_id' => '21',
            'course_id' => '8',
            'rol_id' => '2',
            'creator_id' => '18',
            'observer_type_id' => '2',
            'observer_scene_id' => '4',
            'observer_category_id' => '4',
            'observer_note_id' => '5',
            'observer_code_id' => '25',
            'observation' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
            'state' => '1',
        ]);
        App\Observer::create([
            'user_id' => '5',
            'course_id' => '8',
            'rol_id' => '2',
            'creator_id' => '4',
            'observer_type_id' => '2',
            'observer_scene_id' => '4',
            'observer_category_id' => '4',
            'observer_note_id' => '5',
            'observer_code_id' => '25',
            'observation' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. ',
            'state' => '1',
        ]);
    }
}