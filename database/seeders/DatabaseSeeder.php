<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use PDO;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' =>'Guntur Pongky P',
            'email' => 'gunturpongkyp@gmail.com',
            'password' => bcrypt('12345')
        ]);


        // User::create([
        //     'name' =>'Guntur Pongky P',
        //     'email' => 'gunturpongkypi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' =>' Utuy',
        //     'email' => 'utuy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        User::create([
            'name' =>' Utuy',
            'email' => 'gunturpongkyp@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Category::create([
            'name'=> 'Web Programing',
            'slug'=> 'web Programing'
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug'=> 'judul-pertama',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 1,
            'user_id' =>1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug'=> 'judul-ke-dua',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 1,
            'user_id' =>1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug'=> 'judul-ke-tiga',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 2,
            'user_id' =>1
        ]);
        Post::create([
            'title' => 'Judul Ke Empat',
            'slug'=> 'judul-ke-empat',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsum earum deleniti voluptatem 
            pariatur laboriosam numquam officia. Eius, nulla excepturi voluptas unde incidunt dolores pariatur ad id quisquam inventore. 
            Repellat iure sunt molestias architecto, vel ad eum, voluptatum, deleniti aliquid illum nam ex similique molestiae explicabo
            fuga nemo laborum provident minima reiciendis? Voluptatem earum, minus dolor possimus animi dignissimos 
            temporibus nihil modi facere rerum consectetur hic eius unde voluptatum reprehenderit itaque consequatur.
            Commodi ut suscipit dolor aliquam corrupti velit ducimus excepturi quisquam, numquam eos iste in maiores architecto reprehenderit, 
            tenetur atque voluptas soluta ea facere pariatur debitis dolorem non quae.',
            'category_id' => 2,
            'user_id' =>2
        ]);
        Post::Factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
