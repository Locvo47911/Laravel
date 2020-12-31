<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['is.admin'])->except(['users.list']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.list', compact('users'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    //Vi ben createuserrequest no thua ke formrequest 
    {
        // $request->validation([
        //     'name'=>'require|min:3|max:10',
        //     'email'=>'require|email|unique:users, email',
        //     'password'=>'require|numeric|min:6'
        // ]);
        $data = $request -> all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return Redirect() -> route('users.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::with('comments', 'posts')->find($id);
        //, su dung 2 bang rieng
        //.su dung chung trong 1 bang
        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        //Lay user ra 
        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');
        //tim den tat ca tru token vs method
        $data['password'] = bcrypt($data['password']);
        //ma hoa password truoc khi thuc hien
        User::find($id)->update($data);
        return Redirect() -> route('users.list')->with('message', 'Update User Success !');//cau event hien thi sau khi update
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->comments()->delete();
        //goi toi quan he comment vs user
        $users->posts()->delete();
        //goi toi quan he post vs user
        return Redirect() -> route('users.list')->with('message', 'Delete User Success !');
    }
    public function post_list($id) {
        $users = User::with('posts')->find($id);
        return view('users.post_list', compact('users'));
    }
}
