<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'imagen' => "20221112_post1.jpg",
            'titulo' => "¿QUÉ ES LA DOMA NATURAL?",
            'subtitulo' => "Trabajo en equipo",
            'descripcion' => "La doma natural es una doma que utiliza la naturaleza del caballo, es decir, 
                                parecernos y entendernos lo más posible para que el trabajo en equipo no sea ni tan difícil para mí ni tan molesto para el animal."
        ]);

        DB::table('posts')->insert([
            'imagen' => "20221112_post2.jpg",
            'titulo' => "LOS 3 PRINCIPIOS FUNDAMENTALES",
            'subtitulo' => "Conceptos básicos",
            'descripcion' => "Infalibilidad: Haz fácil y agradable lo que tú quieras y difícil y desagradable lo que quiera él. 
                                Empatía: Pide poco, confórmate con menos y agradece mucho. Gradualidad: Tan suave como puedas y tan firme como sea necesario."
        ]);

        DB::table('posts')->insert([
            'imagen' => "20221112_post3.jpg",
            'titulo' => "CONTROLES",
            'subtitulo' => "Tocar y respetar",
            'descripcion' => "Cuerpo: Tocar o cogerle al caballo las partes del cuerpo que yo quiera. 
                                Espacio vital: Que el caballo respete el espacio que yo tengo. 
                                Movimiento: Que el caballo vaya a la izquierda o a la derecha cuando yo le digo."
        ]);

        DB::table('posts')->insert([
            'imagen' => "20221112_post4.jpg",
            'titulo' => "PREMIOS",
            'subtitulo' => "Algo que les guste",
            'descripcion' => "Cuando conseguimos que el caballo haga lo que la pedimos, recibe tres formas de premiarlo: 
                                no gastar energía, quitar la presión, voz suave y agradable junto a caricias."
        ]);

        DB::table('posts')->insert([
            'imagen' => "20221112_post5.jpg",
            'titulo' => "ACRÓNIMO RECOGI",
            'subtitulo' => "Respeto y confianza",
            'descripcion' => "R: Retributivo. E: Específico. C: Consistente. O: Oportuno. G: Gradual. I: Inofensivo."
        ]);

        DB::table('posts')->insert([
            'imagen' => "20221112_post6.jpg",
            'titulo' => "¿DIESTRO O ZURDO?",
            'subtitulo' => "Pata dominante",
            'descripcion' => "Los potros cuando nacen tienen un 80% de la altura total en sus patas. 
                                Cuando empiezan a comer estiran hacia delante una pata y la otra hacia detrás. Así que naturalmente la pata delantera tiene un casco más grande 
                                que los demás y esa es la pata dominante."
        ]);
    }
}
