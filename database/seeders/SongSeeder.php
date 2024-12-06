<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('song')->insert([
            ['title' => 'Layla', 'group' => 'Derek and the Dominos', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'Kashmir', 'group' => 'Led Zeppelin', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'November Rain', 'group' => 'Guns N\' Roses', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'Free Bird', 'group' => 'Lynyrd Skynyrd', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'Paint It Black', 'group' => 'The Rolling Stones', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'Let It Be', 'group' => 'The Beatles', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'Born in the U.S.A.', 'group' => 'Bruce Springsteen', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'Another Brick in the Wall', 'group' => 'Pink Floyd', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'Don\'t Stop Believin\'', 'group' => 'Journey', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'We Will Rock You', 'group' => 'Queen', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'I Love Rock \'n\' Roll', 'group' => 'Joan Jett', 'style' => 'Rock', 'rating' => 8],
            ['title' => 'Paradise City', 'group' => 'Guns N\' Roses', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'Heroes', 'group' => 'David Bowie', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'You Shook Me All Night Long', 'group' => 'AC/DC', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'Dream On', 'group' => 'Aerosmith', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'My Generation', 'group' => 'The Who', 'style' => 'Rock', 'rating' => 8],
            ['title' => 'Black Dog', 'group' => 'Led Zeppelin', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'With or Without You', 'group' => 'U2', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'All Along the Watchtower', 'group' => 'Jimi Hendrix', 'style' => 'Rock', 'rating' => 10],
            ['title' => 'Hotel California (Live)', 'group' => 'Eagles', 'style' => 'Rock', 'rating' => 9],
            ['title' => 'Boom Boom', 'group' => 'John Lee Hooker', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'Sweet Home Chicago', 'group' => 'Robert Johnson', 'style' => 'Blues', 'rating' => 10],
            ['title' => 'Every Day I Have the Blues', 'group' => 'B.B. King', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'I Can\'t Quit You Baby', 'group' => 'Otis Rush', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Red House', 'group' => 'Jimi Hendrix', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'I\'m Your Hoochie Coochie Man', 'group' => 'Muddy Waters', 'style' => 'Blues', 'rating' => 10],
            ['title' => 'Rollin\' and Tumblin\'', 'group' => 'Elmore James', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Before You Accuse Me', 'group' => 'Eric Clapton', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'Spoonful', 'group' => 'Howlin\' Wolf', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'Call It Stormy Monday', 'group' => 'T-Bone Walker', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Black Night', 'group' => 'Charles Brown', 'style' => 'Blues', 'rating' => 7],
            ['title' => 'It Hurts Me Too', 'group' => 'Elmore James', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Help the Poor', 'group' => 'B.B. King', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'Baby Please Don\'t Go', 'group' => 'Big Joe Williams', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Good Morning Little Schoolgirl', 'group' => 'Sonny Boy Williamson', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Statesboro Blues', 'group' => 'Allman Brothers Band', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'Key to the Highway', 'group' => 'Eric Clapton', 'style' => 'Blues', 'rating' => 9],
            ['title' => 'Mannish Boy', 'group' => 'Muddy Waters', 'style' => 'Blues', 'rating' => 10],
            ['title' => 'Me and the Devil Blues', 'group' => 'Robert Johnson', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Ramblin\' on My Mind', 'group' => 'Robert Johnson', 'style' => 'Blues', 'rating' => 8],
            ['title' => 'Gin and Juice', 'group' => 'Snoop Dogg', 'style' => 'Hip Hop', 'rating' => 9],
            ['title' => 'Alright', 'group' => 'Kendrick Lamar', 'style' => 'Hip Hop', 'rating' => 10],
            ['title' => 'Ms. Jackson', 'group' => 'OutKast', 'style' => 'Hip Hop', 'rating' => 9],
            ['title' => 'Dear Mama', 'group' => '2Pac', 'style' => 'Hip Hop', 'rating' => 10],
            ['title' => 'The Message', 'group' => 'Grandmaster Flash', 'style' => 'Hip Hop', 'rating' => 9],
        ]);
    }
}
