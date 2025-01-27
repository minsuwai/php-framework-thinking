<?php

class PagesController
{
    public function home()
    {
        // fetch all todos
        $users = App::get('database')->selectAll('users');

        view('index', [
            'users' => $users
        ]);
    }

    public function about()
    {
        view('about');
    }

    public function contact()
    {
        view('contact');
    }

    public function createUser()
    {
        App::get('database')->insert([
            'name' => request('name')
        ], 'users');

        redirect('/');
    }
}
