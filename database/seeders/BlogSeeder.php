<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')-> insert([
            [
            'title' => 'Valorant',
            'slug' => 'Valorant-1',
            'user_id' => '1',
            'category_id' => '2',
            'imagePath' => 'storage/postsImages/MFGyYHWtaSAcC9aHtO7euw41bazCY0nXu448Hbyi.png',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec malesuada ex, quis tempor arcu. Curabitur eu nisl malesuada, gravida elit eu, imperdiet urna. Donec interdum lacus vitae nisl pellentesque fermentum. Nulla cursus urna nec hendrerit feugiat. Aenean accumsan pulvinar augue. Integer ullamcorper euismod leo, finibus sodales metus blandit at. Pellentesque imperdiet neque nec feugiat imperdiet. Donec in risus rhoncus, accumsan velit et, fringilla ex. Morbi congue porta odio. Morbi vitae ex quis urna interdum luctus quis at mauris. Etiam purus tellus, efficitur vitae suscipit id, commodo eu elit. Praesent et tincidunt erat, eu pellentesque nulla. Donec pharetra sodales vestibulum.

            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis egestas sagittis eros at posuere. In porta dui at ante auctor pharetra. Vivamus lorem felis, ornare eu molestie ac, auctor vulputate neque. Cras porta dolor eu iaculis ornare. Praesent non commodo purus. Vestibulum ac mi libero. Mauris dignissim nisl at nisl semper pretium. Mauris ac nunc at turpis suscipit pretium. Duis id eros quam. Nunc quis sapien ultrices, luctus enim eu, ultricies ex. Praesent eu tellus enim. Integer volutpat, enim ut vestibulum dignissim, nisi quam facilisis augue, id gravida mauris felis fringilla ante. Quisque mollis lacinia arcu, non venenatis orci aliquam vel.
            
            Praesent auctor eros quis quam tristique, eu varius nulla condimentum. Cras ornare tempor risus in posuere. Sed sed nibh ut sapien faucibus placerat. Donec gravida, est eget pulvinar imperdiet, erat nisi pellentesque purus, id pharetra justo purus eu mi. Cras mollis vitae enim in euismod. In nec nibh a tortor fermentum pretium. Nulla quis consectetur lectus. Maecenas facilisis, nisi eget pulvinar consequat, nulla dui semper lorem, ut porttitor urna metus laoreet velit. Curabitur tellus justo, feugiat sed dignissim a, porta in orci. Cras arcu ante, tincidunt lobortis augue id, pellentesque rhoncus mi. Proin pellentesque varius suscipit. Pellentesque sed risus nec sem ornare consectetur. Cras placerat congue justo ac aliquet. Proin elit elit, bibendum eget luctus sit amet, elementum et dui. Vivamus id risus sapien. Praesent pulvinar efficitur elementum.',
            'created_at' => '2022-05-01 06:16:14',
            'updated_at' => '2022-05-01 06:16:14'
            ],
            [
                'title' => 'CSGO',
                'slug' => 'CSGO-2',
                'user_id' => '2',
                'category_id' => '2',
                'imagePath' => 'storage/postsImages/MFGyYHWtaSAcC9aHtO7euw41bazCY0nXu448Hbyi.png',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec malesuada ex, quis tempor arcu. Curabitur eu nisl malesuada, gravida elit eu, imperdiet urna. Donec interdum lacus vitae nisl pellentesque fermentum. Nulla cursus urna nec hendrerit feugiat. Aenean accumsan pulvinar augue. Integer ullamcorper euismod leo, finibus sodales metus blandit at. Pellentesque imperdiet neque nec feugiat imperdiet. Donec in risus rhoncus, accumsan velit et, fringilla ex. Morbi congue porta odio. Morbi vitae ex quis urna interdum luctus quis at mauris. Etiam purus tellus, efficitur vitae suscipit id, commodo eu elit. Praesent et tincidunt erat, eu pellentesque nulla. Donec pharetra sodales vestibulum.
    
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis egestas sagittis eros at posuere. In porta dui at ante auctor pharetra. Vivamus lorem felis, ornare eu molestie ac, auctor vulputate neque. Cras porta dolor eu iaculis ornare. Praesent non commodo purus. Vestibulum ac mi libero. Mauris dignissim nisl at nisl semper pretium. Mauris ac nunc at turpis suscipit pretium. Duis id eros quam. Nunc quis sapien ultrices, luctus enim eu, ultricies ex. Praesent eu tellus enim. Integer volutpat, enim ut vestibulum dignissim, nisi quam facilisis augue, id gravida mauris felis fringilla ante. Quisque mollis lacinia arcu, non venenatis orci aliquam vel.
                
                Praesent auctor eros quis quam tristique, eu varius nulla condimentum. Cras ornare tempor risus in posuere. Sed sed nibh ut sapien faucibus placerat. Donec gravida, est eget pulvinar imperdiet, erat nisi pellentesque purus, id pharetra justo purus eu mi. Cras mollis vitae enim in euismod. In nec nibh a tortor fermentum pretium. Nulla quis consectetur lectus. Maecenas facilisis, nisi eget pulvinar consequat, nulla dui semper lorem, ut porttitor urna metus laoreet velit. Curabitur tellus justo, feugiat sed dignissim a, porta in orci. Cras arcu ante, tincidunt lobortis augue id, pellentesque rhoncus mi. Proin pellentesque varius suscipit. Pellentesque sed risus nec sem ornare consectetur. Cras placerat congue justo ac aliquet. Proin elit elit, bibendum eget luctus sit amet, elementum et dui. Vivamus id risus sapien. Praesent pulvinar efficitur elementum.',
                'created_at' => '2022-05-01 06:16:14',
                'updated_at' => '2022-05-01 06:16:14'
            ],
            [
                'title' => 'Nintendo sports',
                'slug' => 'nintendo-sports-1',
                'user_id' => '3',
                'category_id' => '3',
                'imagePath' => 'storage/postsImages/MFGyYHWtaSAcC9aHtO7euw41bazCY0nXu448Hbyi.png',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec malesuada ex, quis tempor arcu. Curabitur eu nisl malesuada, gravida elit eu, imperdiet urna. Donec interdum lacus vitae nisl pellentesque fermentum. Nulla cursus urna nec hendrerit feugiat. Aenean accumsan pulvinar augue. Integer ullamcorper euismod leo, finibus sodales metus blandit at. Pellentesque imperdiet neque nec feugiat imperdiet. Donec in risus rhoncus, accumsan velit et, fringilla ex. Morbi congue porta odio. Morbi vitae ex quis urna interdum luctus quis at mauris. Etiam purus tellus, efficitur vitae suscipit id, commodo eu elit. Praesent et tincidunt erat, eu pellentesque nulla. Donec pharetra sodales vestibulum.
    
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis egestas sagittis eros at posuere. In porta dui at ante auctor pharetra. Vivamus lorem felis, ornare eu molestie ac, auctor vulputate neque. Cras porta dolor eu iaculis ornare. Praesent non commodo purus. Vestibulum ac mi libero. Mauris dignissim nisl at nisl semper pretium. Mauris ac nunc at turpis suscipit pretium. Duis id eros quam. Nunc quis sapien ultrices, luctus enim eu, ultricies ex. Praesent eu tellus enim. Integer volutpat, enim ut vestibulum dignissim, nisi quam facilisis augue, id gravida mauris felis fringilla ante. Quisque mollis lacinia arcu, non venenatis orci aliquam vel.
                
                Praesent auctor eros quis quam tristique, eu varius nulla condimentum. Cras ornare tempor risus in posuere. Sed sed nibh ut sapien faucibus placerat. Donec gravida, est eget pulvinar imperdiet, erat nisi pellentesque purus, id pharetra justo purus eu mi. Cras mollis vitae enim in euismod. In nec nibh a tortor fermentum pretium. Nulla quis consectetur lectus. Maecenas facilisis, nisi eget pulvinar consequat, nulla dui semper lorem, ut porttitor urna metus laoreet velit. Curabitur tellus justo, feugiat sed dignissim a, porta in orci. Cras arcu ante, tincidunt lobortis augue id, pellentesque rhoncus mi. Proin pellentesque varius suscipit. Pellentesque sed risus nec sem ornare consectetur. Cras placerat congue justo ac aliquet. Proin elit elit, bibendum eget luctus sit amet, elementum et dui. Vivamus id risus sapien. Praesent pulvinar efficitur elementum.',
                'created_at' => '2022-05-01 06:16:14',
                'updated_at' => '2022-05-01 06:16:14'
            ],
            [
                'title' => 'Elden Ring',
                'slug' => 'elden-ring-1',
                'user_id' => '4',
                'category_id' => '5',
                'imagePath' => 'storage/postsImages/MFGyYHWtaSAcC9aHtO7euw41bazCY0nXu448Hbyi.png',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec malesuada ex, quis tempor arcu. Curabitur eu nisl malesuada, gravida elit eu, imperdiet urna. Donec interdum lacus vitae nisl pellentesque fermentum. Nulla cursus urna nec hendrerit feugiat. Aenean accumsan pulvinar augue. Integer ullamcorper euismod leo, finibus sodales metus blandit at. Pellentesque imperdiet neque nec feugiat imperdiet. Donec in risus rhoncus, accumsan velit et, fringilla ex. Morbi congue porta odio. Morbi vitae ex quis urna interdum luctus quis at mauris. Etiam purus tellus, efficitur vitae suscipit id, commodo eu elit. Praesent et tincidunt erat, eu pellentesque nulla. Donec pharetra sodales vestibulum.
    
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis egestas sagittis eros at posuere. In porta dui at ante auctor pharetra. Vivamus lorem felis, ornare eu molestie ac, auctor vulputate neque. Cras porta dolor eu iaculis ornare. Praesent non commodo purus. Vestibulum ac mi libero. Mauris dignissim nisl at nisl semper pretium. Mauris ac nunc at turpis suscipit pretium. Duis id eros quam. Nunc quis sapien ultrices, luctus enim eu, ultricies ex. Praesent eu tellus enim. Integer volutpat, enim ut vestibulum dignissim, nisi quam facilisis augue, id gravida mauris felis fringilla ante. Quisque mollis lacinia arcu, non venenatis orci aliquam vel.
                
                Praesent auctor eros quis quam tristique, eu varius nulla condimentum. Cras ornare tempor risus in posuere. Sed sed nibh ut sapien faucibus placerat. Donec gravida, est eget pulvinar imperdiet, erat nisi pellentesque purus, id pharetra justo purus eu mi. Cras mollis vitae enim in euismod. In nec nibh a tortor fermentum pretium. Nulla quis consectetur lectus. Maecenas facilisis, nisi eget pulvinar consequat, nulla dui semper lorem, ut porttitor urna metus laoreet velit. Curabitur tellus justo, feugiat sed dignissim a, porta in orci. Cras arcu ante, tincidunt lobortis augue id, pellentesque rhoncus mi. Proin pellentesque varius suscipit. Pellentesque sed risus nec sem ornare consectetur. Cras placerat congue justo ac aliquet. Proin elit elit, bibendum eget luctus sit amet, elementum et dui. Vivamus id risus sapien. Praesent pulvinar efficitur elementum.',
                'created_at' => '2022-05-01 06:16:14',
                'updated_at' => '2022-05-01 06:16:14'
            ],
            [
                'title' => 'Madden',
                'slug' => 'madden-1',
                'user_id' => '4',
                'category_id' => '1',
                'imagePath' => 'storage/postsImages/MFGyYHWtaSAcC9aHtO7euw41bazCY0nXu448Hbyi.png',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec malesuada ex, quis tempor arcu. Curabitur eu nisl malesuada, gravida elit eu, imperdiet urna. Donec interdum lacus vitae nisl pellentesque fermentum. Nulla cursus urna nec hendrerit feugiat. Aenean accumsan pulvinar augue. Integer ullamcorper euismod leo, finibus sodales metus blandit at. Pellentesque imperdiet neque nec feugiat imperdiet. Donec in risus rhoncus, accumsan velit et, fringilla ex. Morbi congue porta odio. Morbi vitae ex quis urna interdum luctus quis at mauris. Etiam purus tellus, efficitur vitae suscipit id, commodo eu elit. Praesent et tincidunt erat, eu pellentesque nulla. Donec pharetra sodales vestibulum.
    
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis egestas sagittis eros at posuere. In porta dui at ante auctor pharetra. Vivamus lorem felis, ornare eu molestie ac, auctor vulputate neque. Cras porta dolor eu iaculis ornare. Praesent non commodo purus. Vestibulum ac mi libero. Mauris dignissim nisl at nisl semper pretium. Mauris ac nunc at turpis suscipit pretium. Duis id eros quam. Nunc quis sapien ultrices, luctus enim eu, ultricies ex. Praesent eu tellus enim. Integer volutpat, enim ut vestibulum dignissim, nisi quam facilisis augue, id gravida mauris felis fringilla ante. Quisque mollis lacinia arcu, non venenatis orci aliquam vel.
                
                Praesent auctor eros quis quam tristique, eu varius nulla condimentum. Cras ornare tempor risus in posuere. Sed sed nibh ut sapien faucibus placerat. Donec gravida, est eget pulvinar imperdiet, erat nisi pellentesque purus, id pharetra justo purus eu mi. Cras mollis vitae enim in euismod. In nec nibh a tortor fermentum pretium. Nulla quis consectetur lectus. Maecenas facilisis, nisi eget pulvinar consequat, nulla dui semper lorem, ut porttitor urna metus laoreet velit. Curabitur tellus justo, feugiat sed dignissim a, porta in orci. Cras arcu ante, tincidunt lobortis augue id, pellentesque rhoncus mi. Proin pellentesque varius suscipit. Pellentesque sed risus nec sem ornare consectetur. Cras placerat congue justo ac aliquet. Proin elit elit, bibendum eget luctus sit amet, elementum et dui. Vivamus id risus sapien. Praesent pulvinar efficitur elementum.',
                'created_at' => '2022-05-01 06:16:14',
                'updated_at' => '2022-05-01 06:16:14'
            ]

        ]);
    }
}
