<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            "name" => "Alberto",
            "email" => "asd@email.com"
        ]);

        // Job::factory(5)->create([
        //     "user_id" => $user->id
        // ]);
        Job::create([
            "user_id" => $user->id,
            "title" => "Laravel Junior Developer",
            "tags" => "Laravel, Junior",
            "company" => "Coca-Cola",
            "logo" => "logos/cocaColaLogo.png",
            "location" => "Madrid",
            "email" => "cocacola@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde Coca-Cola Technologies seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        Job::create([
            "user_id" => $user->id,
            "title" => "Laravel Senior Developer",
            "tags" => "Laravel, Senior",
            "company" => "Amazon",
            "logo" => "logos/amazonLogo.png",
            "location" => "Barcelona",
            "email" => "amazon@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde Amazon seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        Job::create([
            "user_id" => $user->id,
            "title" => "React Junior Developer",
            "tags" => "React, Junior",
            "company" => "Google",
            "location" => "Sevilla",
            "logo" => "logos/googleLogo.png",
            "email" => "google@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde Google seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        Job::create([
            "user_id" => $user->id,
            "title" => "React Senior Developer",
            "tags" => "React, Senior",
            "company" => "Apple",
            "logo" => "logos/appleLogo.png",
            "location" => "Granada",
            "email" => "apple@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde Apple seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        Job::create([
            "user_id" => $user->id,
            "title" => "Java Senior Developer",
            "tags" => "Java, Senior",
            "company" => "Microsoft",
            "logo" => "logos/microsoftLogo.png",
            "location" => "Valencia",
            "email" => "microsoft@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde Microsoft seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        Job::create([
            "user_id" => $user->id,
            "title" => "Java Junior Developer",
            "tags" => "Java, Junior",
            "company" => "Tesla",
            "logo" => "logos/teslaLogo.png",
            "location" => "Zaragoza",
            "email" => "tesla@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde Tesla seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        Job::create([
            "user_id" => $user->id,
            "title" => "Nodejs Senior Developer",
            "tags" => "Nodejs, Senior",
            "company" => "Walmart",
            "logo" => "logos/walmartLogo.png",
            "location" => "Málaga",
            "email" => "walmart@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde Walmart seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        Job::create([
            "user_id" => $user->id,
            "title" => "Nodejs Senior Developer",
            "tags" => "Nodejs, Senior",
            "company" => "NVIDIA",
            "logo" => "logos/nvidiaLogo.png",
            "location" => "Almería",
            "email" => "nvidia@email.com",
            "website" => "https://ballesterosrivasa.com/",
            "description" => "Desde NVIDIA seleccionamos el mejor talento. Cuidamos de nuestros trabajadores mediante el trato humano que nos caracteriza y por ello te impulsamos a las mejores oportunidades profesionales para seguir creciendo sin límites!"
        ]);

        // Job::create([
        //     "title" => "Full-Stack Developer",
        //     "tags" => "Nodejs, React",
        //     "company" => "Granada Solutions",
        //     "location" => "Granada",
        //     "email" => "granadaSolutions@email.com",
        //     "website" => "https://www.granadasolutions.com",
        //     "description" => "We need a Full-Stack Developer"
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
