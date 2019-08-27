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
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/alux-nahual.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/alux.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Bohemia Suburbana",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "7IfawGrEmlHmBW9gqTUd8E",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/bohemia.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/BohemiaSuburbana.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Viernes Verde",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "37ATQx0FHilwEs303kbplC",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/viernes-verde.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/viernes-verde.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Viento en Contra",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "4rDoDo039ieQ0DP7F2tKGk",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/viento-en-contra.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/viento-contra.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Tambor De La Tribu",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "5fwK7ENG6aLoNLdYskJLzQ",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/el-tambor-de-la-tribu.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/tambor.jpg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "El Clubo",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "5MQIG4BAfEDvpdkOI9pDWw",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/elclubo.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/el-clubo.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Pedro Cuevas",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "0Vh0ArsYBxSu91IrDKHnMf",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/pedro-cuevas.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/pedrocuevas.jpg",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "DJ Pako Rodríguez",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "3I8kDjDkai5LpJC7gqzTa3",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/dj-pako-rodriguez.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/dj-pako-rodriguez.png",
            'state'             => 1,
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s')
        ]);

        DB::table('bandas')->insert([
            'nombre'          =>  "Tijuana Love",
            'valor'          => 10,
            'comentario'             => "",
            'descripcion'         => "6dZUANURWmN0HyHCjkDZKi",
            'foto1'          => "https://somosinflumedia.com/gallo/backend/public/png/artistas/tijuana-love.png",
            'foto2'       => "",
            'logo'       => "https://somosinflumedia.com/gallo/backend/public/png/tijuanaLove.jpg",
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
            'banda'             => 5,
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

        DB::table('canciones')->insert(['titulo'=>'Alma Verde','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Alto Al Fuego','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Aqui Esta Tu Tierra','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Con Todas Tus Fuerzas','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Con Tus Manos','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mujer','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Como un Duende','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dime que has olvidado','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'De la noche a la mañana','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Del Suelo Se Suele Aprender','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Devuelveme Mis Sueños','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dime Que No Recuerdas','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La fabula del grillo y el mar','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Conquista','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Duende','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El Loco','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El Norte','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'En El Tiempo','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Eres La Única','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Fiesta Privada','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Hombres De Maiz','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Hoy','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Trampa','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Libre Sentimiento','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Llora Mi Estrella','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Lo Que Siento Por Ti','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Luna de Pana','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mi Pequeña','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Miguel Matabachas','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mira El Sol Brillar','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'No Me Digas','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'No Te Llames Padre','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Pienso En Ti','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Quiero Hablar Con Dios','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Sola','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Toca Viejo','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Vuleve','banda'=>1,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Peces e Iguanas','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Aire','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Oberol','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El grito','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Azul','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Herir Sin Darse Cuenta','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Delfin','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Duele','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mal Sabor','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dios Es Ajeno','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El Vaso','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Lombriz','banda'=>2,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Abrazar La Niebla','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Carmen','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Chocolate Woman','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Colores','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Como Me Arrastro','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Con Piedras, Palos Y Flores','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Daddy','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Don Pedro Pan','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El asesino de una calle cotidiana','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El Simio','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El Sol Dice','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Estadío','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Invisible','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Contigo Aprendí','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Estadio','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mil Pedazos','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Última Botella Del Capitán','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Utopía Del Niño de Bronce','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Los Niños de Las Flores','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Me Haras Sangrar','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Miel','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Muérdeme','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Pantera Onca','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Para El Fin Del Mundo','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Paragamanam','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Rabia','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Requiem En e','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Sed','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Siento Que Me Voy','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Siento Que No Siento','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Traición','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Usumacinta','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'20 Candelas','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'3 AM','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Abril','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Alma Fría','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Arañita Violin','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Arde el Cielo','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Castillos de Arena','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Cuando Estoy Solo','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Desgarrandome','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Despacio','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dime que has olvidado','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Nunca Mas','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Vas a Volver','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mas Sabe el Diablo','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Ciego','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Pared','banda'=>3,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'El último trago','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Hechicera','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Lloraras por mí','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mal herido','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Maldito amor','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mañana seca','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Me derrito sin ti','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Me quemo con tu piel','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Miel','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'No vale nada','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Peleando con Dios','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Tiembla el suelo','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Perdición','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Perlas y Diamantes','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Porqué Será','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Princesa de seda','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Puertas del cielo','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Que No','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Quemando hielo','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Rey de todo','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Señor Sin Pisto','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Serenata Chapina','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Si Te Volviera a Ver','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Si Vivo Asi','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Muero Por ti Muero sin ti','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Sin ti','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Socorama','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Te Extraño','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Tus ojos','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Ún Dia Más','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Vaquerito','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Vestido rojo','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Amor barato','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Ay Amor','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Ballerina','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Candela','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dame tu amor','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dime que me quieres','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'En El Mar Te Miras Más Sabrosa','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Hoy','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Santa Cachucha','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Linda morena','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Loco','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mal de amores','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Me picas','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mi Enfermedad','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mi Plegaria','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mia mama','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'No Estas','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Panchito El Avioncito','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Presos','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Si Te Vas','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Carta de Amor','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Final Feliz','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Por Ella','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Castillos de Arena','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Nada es Igual','banda'=>4,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Skalavera','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Solo Me Faltas Tu','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Suavecito','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Te Necesito','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Te vi','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Tu mujer','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Volar a ti','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Watch it','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Regresa a Mi','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Vuelve','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Satelite','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Pincesa','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Sin Aliento','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Cerca de Mí','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Adios Mundo Cruel','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Te Extraño','banda'=>5,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Me canse','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Descarado','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Pecado Original','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Atado','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Hoy te Pido Perdon','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'En Defensa Propia','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Bajo Control','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'De Todo a Nada','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Fallas','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dual','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Como Estarás','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Amor torcido','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Quien me compra mi casa','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Refugio','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Mujer','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Atacado','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Tan Solo Una Vez','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'No me digas','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dame más','banda'=>6,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Hasta Volverme Loco','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Pongámonos De Acuerdo (Feat. Edwin Luna Y La Trakalosa De Monterrey)','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Que Te Perdone Dios','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'A Partir de Hoy','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Contigo Aprendí','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Oiga Doctor','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'En Peligro de Extinción','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Loka','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'No Vale la Pena','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Loteria','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Pongamonos de Acuerdo','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Haremos el Amor Bailando','banda'=>7,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'First To Stay','banda'=>8,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dancing','banda'=>8,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'This!','banda'=>8,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'La Buena Rola','banda'=>8,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Escape','banda'=>8,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dale','banda'=>8,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Para Ti','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Me Quemaste el Rancho','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Escapemos','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Dentro de Ti','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Te Quedaste','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Love Love Love','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Criminal','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Sunday Funday','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Para Volver','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Shine Like a Star','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Tell Me Lies','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Rock You','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Flor y Miel','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Go Baby Go','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Champagne & Cocaine','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Jelly Blonde','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('canciones')->insert(['titulo'=>'Tuesday Morning','banda'=>9,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
    }
}

