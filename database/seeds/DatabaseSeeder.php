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
        //Companies
        $companies = [1 => 'Cone Digital', 2 => 'ChessIT AB'];

		foreach( $companies as $company ) {
			factory('App\Company')->create([
				'name' => $company
			]);
		}

        $departments = ['Devleopment', 'Sales'];
        //Departments
        foreach( $companies as $c_id => $company ) {
            foreach ($departments as $key => $value) {
                factory('App\Department')->create([
                    'name' => $value,
                    'company_id' => $c_id
                ]);
            }
        }

        //Employees
        $employees = ['Mikael Bång' => 1, 'Richard Bång' => 1, 'Elias Frösell' => 2, 'Lars Bång' => 4, 'Christian Sjögren' => 3];
        foreach ($employees as $name => $d_id) {
            $employee = factory('App\Employee')->create();
            $employee->department()->attach($d_id);
        }

        //Recruiters
		factory('App\Recriuter', 10)->create();

        //Categories
        $categories = ['Development','Sales','Marketing','Finance'];
        foreach ($categories as $cat) {
            factory('App\Category')->create([
                'name' => $cat,
                'slug' => str_slug($cat)
            ]);
        }

        //Tags
        $tags = [
            'Javascript' => 1,
            'Php' => 1,
            '.NET' => 1,
            'React' => 1,
            'Analyst' => 4,
            'Advisor' => 4,
            'Salesman' => 2,
            'VP of Sales' => 2
        ];
        foreach ($tags as $tag => $cat_id) {
            factory('App\Tag')->create([
                'name' => $tag,
                'slug' => str_slug($tag),
                'category_id' => $cat_id
            ]);
        }

        //Benefits
        $benefits = [
            'Location' => 'home',
            'After Works' => 'person',
            'Career' => 'arrow-circle-top',
            'Collegues' => 'dashboard',
            'Bonuses' => 'dollar',
            'Healthcare' => 'medical-cross',
            'Dental' => 'print',
        ];
        foreach ($benefits as $benefit => $icon) {
            factory('App\Benefit')->create([
                'name' => $benefit,
                'icon' => $icon,
            ]);
        }

        //Ads
        for($i = 0; $i < 10; $i++){
            $ad = factory('App\Ad')->create();
            if ($ad->category_id == 1) {
                $tag_id = rand(1,4);
            }
            else if ($ad->category_id == 2) {
                $tag_id = rand(7,8);
            }else {
                $tag_id = rand(5,6);
            }
             
            $ad->tag()->attach($tag_id);
            $ad->benefit()->attach(rand(1,7));
        }

    }
}
