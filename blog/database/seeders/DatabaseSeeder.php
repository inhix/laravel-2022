<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Game;
use App\Models\Player;
use App\Models\Post;
use App\Models\SocialIcon;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        Category::factory(4)->create();
        Post::factory(50)->create();
        Comment::factory(300)->create();
        Game::factory(5)->create([
            'score' => null
        ]);
        Game::factory(15)->create([]);
        Team::factory(6)->create();
        Player::factory(20)->create();
        SocialIcon::factory()->create([
            'class' => 'facebook',
            'link' => 'https://www.facebook.com/teamspiritpage',
            'logo_class' => 'fa fa-facebook'
        ]);
        SocialIcon::factory()->create([
            'class' => 'twitter',
            'link' => 'https://twitter.com/team__spirit',
            'logo_class' => 'fa fa-twitter'
        ]);
        SocialIcon::factory()->create([
            'class' => 'instagram',
            'link' => 'https://www.instagram.com/team__spirit/',
            'logo_class' => 'fa fa-instagram'
        ]);
        SocialIcon::factory()->create([
            'class' => 'twitch',
            'link' => 'https://www.twitch.tv/team_spirit_channel',
            'logo_class' => 'fa fa-twitch'
        ]);
        SocialIcon::factory()->create([
            'class' => 'vk',
            'link' => 'http://vk.com/public32151480',
            'logo_class' => 'fa fa-vk'
        ]);
    }
}
