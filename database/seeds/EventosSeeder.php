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
            'descripcion'         => "",
            'foto1'          => "https://static.elmundo.sv/wp-content/uploads/2018/10/alux-nahual.jpg",
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
            'descripcion'         => "",
            'foto1'          => "https://www.guatemala.com/fotos/201607/Bohemia-885x500.jpg",
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
            'descripcion'         => "",
            'foto1'          => "http://quehacemosenguate.com/wp-content/uploads/2016/07/20160723RV22.png",
            'foto2'       => "",
            'logo'       => "https://i.scdn.co/image/7dbac8a1dd3d4f93de0b2a6c3671ad530a454d2e",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Viento en Contra",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "",
            'foto1'          => "https://i.ytimg.com/vi/4NCijQ1Y17c/hqdefault.jpg",
            'foto2'       => "",
            'logo'       => "https://i.ytimg.com/vi/DH2mBW5f__Q/hqdefault.jpg?custom=true&w=168&h=94&stc=true&jpg444=true&jpgq=90&sp=68&sigh=kAtzdX1t6dgVhh9x8twoiDEwKOQ",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Tambor De La Tribu",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "",
            'foto1'          => "https://i.ytimg.com/vi/D7IFPD4ck2s/hqdefault.jpg",
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
            'descripcion'         => "",
            'foto1'          => "https://www.guatemala.com/fotos/201510/el-clubo-875x500.jpg",
            'foto2'       => "",
            'logo'       => "https://elguatemalteco.files.wordpress.com/2015/10/12096371_10153620926857192_1523852530067124219_n.png?w=816&h=9999",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Pedro Cuevas",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "",
            'foto1'          => "https://www.prensalibre.com/wp-content/uploads/2018/12/69ba422e-8412-419c-8d4b-809988f0442f.jpg?quality=82&w=500&h=430&crop=1",
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
            'descripcion'         => "",
            'foto1'          => "https://assets.metrolatam.com/gt/2016/05/30/pako-rodriguez-lanza-sencillo-7-900x600.jpg",
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
            'descripcion'         => "",
            'foto1'          => "https://www.guatemala.com/fotos/201707/Tl-885x500.jpg",
            'foto2'       => "",
            'logo'       => "https://photos.bandsintown.com/thumb/8446872.jpeg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas_eventos')->insert([
            'comentario'             => "",
            'descripcion'         => "",
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
            'youtube'         => "",
            'twitter'         => "",
            'web'         => "",
            'spotyfy'         => "",
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
