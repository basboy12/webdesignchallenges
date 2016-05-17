<?php

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Challenge;
use App\Models\Entry;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('challenges')->delete();

        $user = new User([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
            'photo' => 'http://www.placehold.it/200x200'
        ]);
        $user->save();
        $this->command->info('Test User Created');

        $challenge1 = new Challenge([
            'name' => 'Brand Logo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!',
            'end_date' => '2016-07-01'
        ]);
        $user->challenges()->save($challenge1);

        $challenge2 = new Challenge([
            'name' => 'Portfolio Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!',
            'end_date' => '2016-07-01'
        ]);
        $user->challenges()->save($challenge2);

        $challenge3 = new Challenge([
            'name' => 'Pinterest Clone',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi repellendus, voluptatem ab amet sunt officia nemo aliquid blanditiis eveniet quos earum voluptatibus. Nesciunt, porro, fugit!',
            'end_date' => '2016-07-01'
        ]);
        $user->challenges()->save($challenge3);
        $this->command->info('Sample Challenges Generated');

        $entry1 = new Entry([
            'note' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, omnis!',
            'filename' => 'http://placehold.it/200x200'
        ]);
        $entry1->user()->associate($user);
        $entry1->challenge()->associate($challenge1);
        $entry1->save();

        $entry2 = new Entry([
            'note' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, omnis!',
            'filename' => 'http://placehold.it/200x200'
        ]);
        $entry2->user()->associate($user);
        $entry2->challenge()->associate($challenge2);
        $entry2->save();

        $entry3 = new Entry([
            'note' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, omnis!',
            'filename' => 'http://placehold.it/200x200'
        ]);
        $entry3->user()->associate($user);
        $entry3->challenge()->associate($challenge3);
        $entry3->save();
    }
}
