<?php

namespace App\Http\Controllers;

// use App\User;
// use App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $users = User::all()->where('name', 'like', '%',$search, '%');
        
    //     return view('search', [ 'users' => $users]); 
    // }

    public function index(User $users){
        
            $users = User::all();
            // $restaurants = Restaurant::get();
            // $users = User::get();


            return view('users.index', ['users'=>$users]);
        // } 
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(Auth::check()){
        //     if(Auth::user()->role_id == 1){
        
                return view('users.create');
        //     }
        //     return view('auth.login');
        // }
        // return view('auth.login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // if(Auth::check()){
            $user = User::create([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                // 'address' => $request->input('adress'),
                // 'zipcode' => $request->input('zipcode'),
                // 'city' => $request->input('city'),
                // 'phone' => $request->input('phone'),
                'password' => password_hash($request->input('password'),PASSWORD_BCRYPT)

            ]);
            if($user){
                return redirect()->route('users.index', ['user'=> $user->id])
                ->with('product_created', 'Product has been created succesfully!');
            }
        // }
            // return back()->with('product_created', 'Product has been created succesfully!');
        	
            // return back()->withInput()->with('errors', 'Error creating new user');
            // return back()->withInput()->wordwrap(str)ith('errors' , 'Error creating new user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($user->id);
            // $users = User::get();
        // $user = User::find($user->id);
        $user = User::where('id',$id)->first();

        // $user = User::find($user->id);
            
        // return view('users.show', compact('user'));
        return view('users.show', [ 'user' => $user]);
    }

    // public function show(User $user)
    // {
    //     // $user = User::find($user->id);
    //         // $users = User::get();
    //     $user = User::find($user->id);
    //     // $user = User::find($user->id);
            
    //     // return view('users.show', compact('user'));
    //     return view('users.show', [ 'user' => $user]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $user = User::find($user->id );
        $user = User::find($id);

        return view('users.edit', [ 'user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    	$user = User::find($request->id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = password_hash($request->input('password'),PASSWORD_BCRYPT);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.index')->with('user_updated' , 'User has been updated succesfully!');
        // return back()->with('user_updated', 'User has been updated succesfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();

        return redirect()->route('users.index')->with('user_deleted' , 'User deleted successfully');
    }
    // public function getDeletePost($post_id)
    // {
    //     $post =Post::where('id',$post_id)->first();

    //     if ($post != null) {
    //         $post->delete();
    //         return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);
    //     }

    //     return redirect()->route('dashboard')->with(['message'=> 'Wrong ID!!']);
    // } 

}