<?php

use Illuminate\Database\Seeder;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('eventos')->insert([
            'titulo'          =>  "Independencia",
            'descripcion'          => "",
            'usuario'             => 1,
            'type'         => 1,
            'tipo'         => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Alux Nahual",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "2i5W78vjs3RRZlQiL1RwP6",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/alux-nahual.png",
            'foto2'       => "",
            'logo'       => "https://pbs.twimg.com/profile_images/1099415601913700352/j2QnoEGh.jpg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Bohemia Suburbana",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "7IfawGrEmlHmBW9gqTUd8E",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/bohemia.png",
            'foto2'       => "",
            'logo'       => "http://quehacemosenguate.com/wp-content/uploads/2014/08/BohemiaSuburbana2.jpg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Viernes Verde",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "37ATQx0FHilwEs303kbplC",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/viernes-verde.png",
            'foto2'       => "",
            'logo'       => "http://documentos.devcodegt.com/gallo/viento-contra.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Viento en Contra",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "4rDoDo039ieQ0DP7F2tKGk",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/viento-en-contra.png",
            'foto2'       => "",
            'logo'       => "http://documentos.devcodegt.com/gallo/viernes-verde.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Tambor De La Tribu",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "5fwK7ENG6aLoNLdYskJLzQ",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/elclubo.png",
            'foto2'       => "",
            'logo'       => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCoLAwSFj1NSsq75nZimMs0ii09EytbMn5oCwU3oJwt9FMseuD",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "El Clubo",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "5MQIG4BAfEDvpdkOI9pDWw",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/elclubo.png",
            'foto2'       => "",
            'logo'       => "http://documentos.devcodegt.com/gallo/el-clubo.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Pedro Cuevas",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "0Vh0ArsYBxSu91IrDKHnMf",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/pedro-cuevas.png",
            'foto2'       => "",
            'logo'       => "http://wp.mundodiverso.com/wp-content/uploads/2013/08/pedrocuevas.jpg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "DJ Pako Rodríguez",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "3I8kDjDkai5LpJC7gqzTa3",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/dj-pako-rodriguez.png",
            'foto2'       => "",
            'logo'       => "https://i1.sndcdn.com/avatars-000265929333-k3yb47-t500x500.jpg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Tijuana Love",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "6dZUANURWmN0HyHCjkDZKi",
            'foto1'          => "http://documentos.devcodegt.com/gallo/artistas/tijuana-love.png",
            'foto2'       => "",
            'logo'       => "https://photos.bandsintown.com/thumb/8446872.jpeg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/channel/UCNcintYU0Nwxtg2-YtV2tXA",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/pages/category/Performing-Arts/Alux-Nahual-P%C3%A1gina-Oficial-198447356918227/",
            'spotyfy'         => "https://open.spotify.com/artist/2i5W78vjs3RRZlQiL1RwP6",
            'banda'             => 1,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/user/YTOficialBS",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/BohemiaSuburbanaFanPage/",
            'spotyfy'         => "https://open.spotify.com/artist/7IfawGrEmlHmBW9gqTUd8E",
            'banda'             => 2,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/channel/UCcZdYaRzo88Cr7a4-VZDvRA",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/ViernesVerdeFanPage/",
            'spotyfy'         => "https://open.spotify.com/artist/37ATQx0FHilwEs303kbplC",
            'banda'             => 3,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/channel/UCeSTcpezMhplkYM144lhsCQ",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/vientoencontra/",
            'spotyfy'         => "https://open.spotify.com/artist/4rDoDo039ieQ0DP7F2tKGk",
            'banda'             => 4,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/channel/UCQhJF8VunK2JE3i4L8Lx0qQ",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/elTambordelaTribu/",
            'spotyfy'         => "https://open.spotify.com/artist/5fwK7ENG6aLoNLdYskJLzQ",
            'banda'             => 4,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/channel/UCd2aLC5xUwafWbIxFNozHGw",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/elClubo/",
            'spotyfy'         => "https://open.spotify.com/artist/5MQIG4BAfEDvpdkOI9pDWw",
            'banda'             => 6,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/channel/UCyOpx55qn7mXCd5zozOUAPQ",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/pedrocuevasmusic/",
            'spotyfy'         => "https://open.spotify.com/artist/0Vh0ArsYBxSu91IrDKHnMf",
            'banda'             => 7,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/user/djPakoRodriguez",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/pakorodriguezdj/",
            'spotyfy'         => "https://open.spotify.com/artist/3I8kDjDkai5LpJC7gqzTa3",
            'banda'             => 8,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "https://www.youtube.com/channel/UCgKk2qhYROl_-ltAcVcO6vg",
            'twitter'         => "",
            'web'         => "https://www.facebook.com/tijuanalove/",
            'spotyfy'         => "https://open.spotify.com/artist/6dZUANURWmN0HyHCjkDZKi",
            'banda'             => 9,
            'evento'             => 1,
            'type'             => 1,
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 2,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 3,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 4,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 5,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 6,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 7,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 8,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('canciones')->insert([
            'titulo'             => "Cancion 1",
            'valor'         => 10,
            'fecha'         => "2000-10-10",
            'comentario'         => "",
            'descripcion'         => "",
            'type'         => 1,
            'state'             => 1,
            'banda'             => 9,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

    }
}
