<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VacantesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacantes')->insert([
            'titulo' => 'FrontEnd Developer',
            'descripcion' => 'What is Lorem Ipsum? \n
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'skills' => 'php,sql,javascript,java',
            'imagen' => '1624763278.png',
            'activa' => '1',
            'categoria_id' => '1',
            'experiencia_id' => '2',
            'ubicacion_id' => '3',
            'salario_id' => '3',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('vacantes')->insert([
            'titulo' => 'Python Developer',
            'descripcion' => 'What is Lorem Ipsum? \n
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'skills' => 'php,sql,javascript,Poo,MongoDB',
            'imagen' => '1624763278.png',
            'activa' => '1',
            'categoria_id' => '1',
            'experiencia_id' => '2',
            'ubicacion_id' => '3',
            'salario_id' => '3',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);   
        DB::table('vacantes')->insert([
            'titulo' => 'Javascript specialist',
            'descripcion' => 'What is Lorem Ipsum? \n
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'skills' => 'php,sql,javascript,VueJS,ReactJS',
            'imagen' => '1624763278.png',
            'activa' => '1',
            'categoria_id' => '1',
            'experiencia_id' => '2',
            'ubicacion_id' => '3',
            'salario_id' => '3',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);   
        DB::table('vacantes')->insert([
            'titulo' => 'Angular Developer',
            'descripcion' => 'What is Lorem Ipsum? \n
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'skills' => 'php,sql,javascript',
            'imagen' => '1624763278.png',
            'activa' => '1',
            'categoria_id' => '1',
            'experiencia_id' => '2',
            'ubicacion_id' => '3',
            'salario_id' => '3',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);   
        DB::table('vacantes')->insert([
            'titulo' => 'Devops Enginner',
            'descripcion' => 'What is Lorem Ipsum? \n
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'skills' => 'php,sql,javascript',
            'imagen' => '1624763278.png',
            'activa' => '1',
            'categoria_id' => '3',
            'experiencia_id' => '2',
            'ubicacion_id' => '3',
            'salario_id' => '3',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);   
        DB::table('vacantes')->insert([
            'titulo' => 'UX/UI Designer',
            'descripcion' => 'What is Lorem Ipsum? \n
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'skills' => 'php,sql,javascript',
            'imagen' => '1624763278.png',
            'activa' => '1',
            'categoria_id' => '2',
            'experiencia_id' => '2',
            'ubicacion_id' => '3',
            'salario_id' => '3',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);   
        DB::table('vacantes')->insert([
            'titulo' => 'Backend Developer',
            'descripcion' => 'What is Lorem Ipsum? \n
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'skills' => 'java,Angular,MongoDB',
            'imagen' => '1624763278.png',
            'activa' => '1',
            'categoria_id' => '1',
            'experiencia_id' => '2',
            'ubicacion_id' => '3',
            'salario_id' => '3',
            'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);           

    }
}
