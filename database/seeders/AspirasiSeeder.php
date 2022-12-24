<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aspirasi;

class AspirasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aspirasi::query()->create([
            'nama' => "Obi",
            'email' => "Obi@gmail.com",
            'foto' => "https://picsum.photos/200/300",
            'cerita' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur esse aut quas maiores voluptas quaerat inventore iste nihil dignissimos ducimus eius facere, labore fuga. Minima sed quaerat optio obcaecati odit reprehenderit quam praesentium harum animi ea in vitae, nemo iure minus modi quo quisquam quod at quia tempora. Aut alias nobis expedita voluptates repellat vero explicabo numquam atque officiis ad ratione totam eos excepturi, illo pariatur cupiditate ex, amet dolore unde obcaecati adipisci? Corrupti, ratione rem eligendi iure nulla necessitatibus cupiditate accusantium vel, quod fuga ullam debitis molestias esse nesciunt obcaecati consectetur est vitae amet accusamus dolore quisquam repudiandae facilis facere? Molestiae tempora asperiores illum et excepturi harum corporis, quos inventore aut voluptatum voluptates omnis veniam dicta tenetur laborum accusantium. Tempore explicabo animi enim cumque atque ducimus? Exercitationem accusantium officiis eveniet inventore voluptatibus non id dolore ipsum in magnam totam, deserunt rerum expedita maiores aperiam iusto minima? Quos, doloremque repudiandae.',
            'isRead' => 1
        ]);
    }
}


