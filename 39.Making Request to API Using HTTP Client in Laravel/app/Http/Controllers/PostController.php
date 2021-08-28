<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    ####################----CRUD Operation Through API----##################################
   
    //1)Get API  to fetch all data from an API Url
    public function getAllPost(){
        $ourResponse=Http::get('https://jsonplaceholder.typicode.com/posts');

        // i)DD all Fetch data as an array format
        // dd($ourResponse->collect());

        // ii)Return all fetched data as array format
        // return response($ourResponse->collect());

        // iii)Return all fetched data into view as an array
        return view('allpost',['data'=>$ourResponse->collect()]);
    }

    //2)Get API  to fetch a Single data from an API Url by id
    public function getPostById($id){
        $ourResponse=Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return view('singlepost',['data'=>$ourResponse->collect()]);
    }

    //3)POST API to add/send data by creating a post
    public function addPost(){
        $ourResponse=Http::post('https://reqres.in/api/users',[
            // Send below data into above post api url as
            'name'=>'Sonam',
            'job'=>'Designer',
        ]);
        // DD the response to check it is done or not
        dd($ourResponse->json());
    }

    //4)PUT API to Update data through API Urls
    public function updatePost($id){
        $ourResponse=Http::put('https://reqres.in/api/users/'.$id,[
            // Send below data into above put api url as
            'name'=>'Rahul',
            'job'=>'Developer',
        ]);
        // DD the response to check it is done or not
        dd($ourResponse->json());
    }

    //5)DELETE API to Delete data through API Urls
    public function deletePost($id){
        $ourResponse=Http::delete('https://reqres.in/api/users/'.$id);
        // DD the response to check it is done or not
        dd($ourResponse);
    }
    ####################----Get Extra Information About API Response----##################################
    // A)All information about API Response
    // public function getInfo(){
    //     $ourResponse=Http::get('https://jsonplaceholder.typicode.com/posts/1');
    //     // 1)To Know All information About GET Api Response
    //     // dd($ourResponse);

    //     // 2)To Know the GET Api Response Body
    //     // dd($ourResponse->body());

    //     // 3)To Know the GET Api Response as Json format
    //     // dd($ourResponse->json());

    //     // 4)To Know the GET Api Response as collection format
    //     // dd($ourResponse->collect());

    //     // 5)To Know the GET Api Response of collection in array format
    //     // dd($ourResponse->collect()->all());

    //     // 6)To Know the GET Api Response Status Code
    //     // dd($ourResponse->status());

    //     // 7)To Determine the GET Api Response ok or not( it return true/false)
    //     // dd($ourResponse->ok());

    //     // 8)To Determine the GET Api Response code is >= 200 and <300
    //     // dd($ourResponse->successful());

    //     // 9)To Determine the GET Api Response code is >= 400
    //     // dd($ourResponse->failed());

    //     // 10)To Determine the GET Api Response code is 500 level(Server Error)
    //     // dd($ourResponse->serverError());

    //     // 11)To Determine the GET Api Response code is 400 level(Client Error)
    //     // dd($ourResponse->clientError());

    //     // 12)To Know the GET Api Response all headers
    //     // dd($ourResponse->headers());
        
    //     return view('getinfo');
    // }


    // B)To use the api url as array
    // public function getInfo(){
    //     $ourResponse=Http::get('https://jsonplaceholder.typicode.com/posts/1')['title'];
    //     dd($ourResponse);
    // }

    // C)Set Timeout for API response
    // public function getInfo(){
    //     $ourResponse=Http::timeout(5)->get('https://jsonplaceholder.typicode.com/posts/1');
    //     dd($ourResponse);
    // }

    // D)Set ReTry to API Request URL:- retry(no of attempts, time interver)
    // public function getInfo(){
    //     $ourResponse=Http::retry(3,100)->get('https://jsonplaceholder.typicode.com/posts/1');
    //     dd($ourResponse);
    // }

    // E)Send Header info with API Request URL
    public function getInfo(){
        $ourResponse=Http::withHeaders(['Content-Type'=>'application/json'])->get('https://jsonplaceholder.typicode.com/posts/1');
        dd($ourResponse);
    }
    

}
