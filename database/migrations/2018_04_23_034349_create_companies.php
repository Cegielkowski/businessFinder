<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Company;

class CreateCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Company::create(['title' => 'Wayne Corp','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '312412412321' ]);
        Company::create(['title' => 'Osborn','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '53453634643' ]);
        Company::create(['title' => 'Parker Industries','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '52626233223' ]);
        Company::create(['title' => 'Good old Moe’s Tavern','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '4234325235' ]);
        Company::create(['title' => 'McGee’s','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '23426526' ]);
        Company::create(['title' => 'Google','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '52362363253' ]);
        Company::create(['title' => 'Facebook','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '623542342523324' ]);
        Company::create(['title' => 'Apple','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '52362352342' ]);
        Company::create(['title' => 'Dell','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '74543322365' ]);
        Company::create(['title' => 'Samsung','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '52356234353' ]);
        Company::create(['title' => 'Lenovo','phone_number' => '998583391','adress' => 'av manoel haggi filho 261','email' => 'cegielkowski.dev@gmail.com', 'zip_code' => '17120000', 'city' => 'agudos','state' => 'São paulo', 'description' => 'Mussum Ipsum.','category' => 'Tech', 'uuid' => '6346345235236' ]);

    }

}
