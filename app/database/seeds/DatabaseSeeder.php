<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

     
        
    	DB::table('users')->insert([
            'dni'=>'73423455',
            'name'=>'Joset',
            'lastname'=>'Manihuari',
            'telephone'=>'232311234',
            'address'=>'Lima Peru',
            'type'=>'admin',
            'email'=>'servidorlogico@gmail.com',
            'password'=>bcrypt('u201319421'),
        ]);
        DB::table('categories')->insert([
            'slug'=>'clothes',
            'name'=>'Ropa'
        ]);
        DB::table('categories')->insert([
            'slug'=>'accesories',
            'name'=>'Accesorios'
        ]);
        DB::table('categories')->insert([
            'slug'=>'others',
            'name'=>'Otros'
        ]);
        DB::table('sizes')->insert([
            
            'size'=>'XS'
        ]);
        DB::table('sizes')->insert([
            
            'size'=>'S'
        ]);
        DB::table('sizes')->insert([
            
            'size'=>'M'
        ]);
        DB::table('sizes')->insert([
            
            'size'=>'L'
        ]);
        DB::table('sizes')->insert([
            
            'size'=>'XL'
        ]);
        
        
           for($i=0; $i<100; $i++){
            \App\Product::create([
            'slug'=>'product-'.$i,
            'name'=>'producto '.$i,
            'description'=>'ropa, vestido, niños, de, vestir, adultos, mujeres, señoras, tias, paqari',
            'category_id'=>rand ( 1 , 3),
            'price'=>rand ( 5 , 50),
            'stock'=>rand ( 1 , 10),
            'section'=>'autism',
            'rest'=>'1',
            'url_1'=>'6.png',
            'url_2'=>'6.png',
            'url_3'=>'6.png'
            
            ]);
            
        }
    
         for($i=100; $i<200; $i++){
            \App\Product::create([
            'slug'=>'product-'.$i,
            'name'=>'producto '.$i,
            'description'=>'ropa, ninios, niños, adultos, vestio, ropa, verano, polo',
            'category_id'=>rand ( 1 , 3),
            'price'=>rand ( 5 , 50),
            'stock'=>rand ( 1 , 10),
            'section'=>'unique',
            'rest'=>'1',
            'url_1'=>'7.png',
            'url_2'=>'7.png',
            'url_3'=>'7.png'
            
            ]);
            
        }
        
         for($i=200; $i<300; $i++){
            \App\Product::create([
            'slug'=>'product-'.$i,
            'name'=>'producto '.$i,
            'description'=>'extra, verano, vestido, collares, reloj',
            'category_id'=>rand ( 1 , 3),
            'price'=>rand ( 5 , 50),
            'stock'=>rand ( 1 , 10),
            'section'=>'extra',
            'rest'=>'1',
            'url_1'=>'9.png',
            'url_2'=>'9.png',
            'url_3'=>'9.png'
            
            ]);
            
        }
        
    
    

    }
}
