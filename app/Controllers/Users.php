<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Accounts',
            'users' => [
                [
                    'username' => 'admin01',
                    'full_name' => 'John Administrator',
                    'role' => 'Administrator'
                ],
                [
                    'username' => 'cashier01',
                    'full_name' => 'Anna Lopez',
                    'role' => 'Cashier'
                ],
                [
                    'username' => 'cashier02',
                    'full_name' => 'Mark Rivera',
                    'role' => 'Cashier'
                ],
                [
                    'username' => 'manager01',
                    'full_name' => 'Sofia Ramos',
                    'role' => 'Manager'
                ],
                [
                    'username' => 'staff01',
                    'full_name' => 'Leo Martinez',
                    'role' => 'Staff'
                ]
            ]
        ];

        return view('users/index', $data);
    }
}