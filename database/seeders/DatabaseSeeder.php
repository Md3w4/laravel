<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Mahadewa',
            'username' => 'Mdewa',
            'email' => 'masdew@gmail.com',
            'password' => bcrypt("password"),
        ]);

        // User::create([
        //     'name' => 'Maulana Muhammad',
        //     'email' => 'maul@gmail.com',
        //     'password' => bcrypt("123"),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        /*Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore praesentium quo voluptatum. Vitae unde fugiat inventore ullam aperiam suscipit quod eum dolores ducimus impedit ab nisi animi adipisci expedita',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore praesentium quo voluptatum. Vitae unde fugiat inventore ullam aperiam suscipit quod eum dolores ducimus impedit ab nisi animi adipisci expedita corporis laudantium tenetur velit architecto, explicabo itaque hic! Obcaecati laboriosam reiciendis voluptatem optio temporibus sunt numquam quia repudiandae nemo ullam dolor, in impedit et provident? Alias iste dolore officiis obcaecati culpa cupiditate saepe pariatur ex nostrum perferendis optio necessitatibus, ipsum quibusdam sit quod. Repudiandae nulla ex, aliquam veritatis amet quidem? Sed tenetur libero quisquam laudantium hic numquam dolorem perferendis vel error ut exercitationem cumque possimus rerum corporis quod, modi labore fuga.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odio nobis ab cupiditate eius, sint facilis deleniti nesciunt commodi iure sapiente aliquam esse porro ullam provident vel!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odio nobis ab cupiditate eius, sint facilis deleniti nesciunt commodi iure sapiente aliquam esse porro ullam provident vel! Ad vero laboriosam incidunt excepturi pariatur? Accusantium ex accusamus consequatur nam quidem a illum libero, minus quos dolorem ratione voluptate, sed consequuntur nobis? Ipsa, esse perferendis sint eaque provident repellendus modi. Deserunt laudantium est nemo iste fugiat? Earum, recusandae odit repellendus aperiam dicta, id libero eveniet voluptates nobis sint impedit quidem nulla minus autem? Mollitia possimus molestias maiores porro reiciendis fuga obcaecati recusandae est sed excepturi aliquid, soluta tempore. Repudiandae error ipsam maiores.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum cupiditate architecto repellat sed totam. Sit, ex earum quaerat facere aut quasi eum corporis. Aliquam sequi tempore quo voluptates,',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum cupiditate architecto repellat sed totam. Sit, ex earum quaerat facere aut quasi eum corporis. Aliquam sequi tempore quo voluptates, modi eos hic molestiae sit, fugit rem culpa. Veritatis iure consequuntur dolores, nesciunt maiores facere ut quod eius deserunt in ex possimus totam nihil doloremque eum praesentium, ea sit animi assumenda nulla dolor error sunt tempora temporibus. Est totam sint maxime fugiat veritatis asperiores voluptate, soluta saepe illum voluptas, voluptatum excepturi aut quod! Ratione ullam quasi placeat minus eligendi a quae inventore hic illo voluptate quo, et iusto voluptatem, sint expedita corporis?',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste alias quis, maiores inventore ducimus assumenda obcaecati. Ipsum illo officia at accusantium, quis omnis quae et quisquam hic nam quam consectetur',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste alias quis, maiores inventore ducimus assumenda obcaecati. Ipsum illo officia at accusantium, quis omnis quae et quisquam hic nam quam consectetur laboriosam ducimus blanditiis iure perspiciatis harum nulla repudiandae ratione natus vero. Iure molestias modi ab. Necessitatibus, consectetur! Id est in animi nostrum exercitationem delectus? Quam voluptatum optio quos itaque sequi? Optio reprehenderit pariatur, inventore nobis eum quia! Nulla reprehenderit ullam aspernatur dolor eum odio laborum quo nihil dicta illo, nam doloribus vitae, harum voluptate, nostrum quos molestiae sed minus. Mollitia deserunt suscipit possimus molestias reiciendis, tempore modi minima iste voluptatibus!',
            'category_id' => 3,
            'user_id' => 1
        ]);*/





        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
