<?php
use Faker\Factory;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
class User{}

Route::get('/', function () {
    $faker=Factory::create();
    $mrBean= new User();
    $mrBean->name= 'Mr Bean';
    $mrBean->handle='@canada';
    $mrBean->description="Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            accusantium esse explicabo eveniet ";
    $mrBean->link='canada.com';
    $mrBean->joinedDate='Oct,2014';
    $mrBean->tweets=3434;
    $mrBean->following=787;     
    $mrBean->followers='1.6K';
    $mrBean->likes=879;
    $mrBean->moments=10;    
    
    
    $user1=new User();
    $user1->image = 'https://pbs.twimg.com/profile_images/719427633117671425/J5wKAQlQ_bigger.jpg';
    $user1->name = 'Abhishek Bachchan';
    $user1->handle = '@juniorbachchan';
    
  
    $viewData=[
        'user'=>$mrBean,
        'youMightLike'=>[
            [
                'image'=>"./../views/images/pic.jpg",
                'name'=>"Tarek Fatah",
                'handle'=>"@Tarek Fatah",
            ],
            [
                'image'=> "./../views/images/pic.jpg",
                'name'=>"Tarek Fatah",
                'handle'=>"@Tarek Fatah",
            ],
            [
                'image'=>"./../views/images/pic.jpg",
                'name'=>"Tarek Fatah",
                'handle'=>"@Tarek Fatah",
            ],
            [
                'image'=>"./../views/images/pic.jpg",
                'name'=>"Tarek Fatah",
                'handle'=>"@Tarek Fatah",
            ],
        ],

        'tweetsList'=> [
                [
                    'user'=>[
                        'image'=>"https://pbs.twimg.com/profile_images/521655203011899392/pxOndDc7_bigger.png",
                        'name'=>"Mr Bean",
                        'handle'=>"@ MrBean",
                    ],
                    'date'=>"Oct 27",
                    'content'=>'lorejh hjkhj  kjhkj hjh h'
                ]
            ]




    ];
    return view('welcome',$viewData);
});
Route::get('/page1', function () {
    return view('page1');
});
Route::get('/page2', function () {
    return view('page2');
});