<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;
class NotificationSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Notification::create([
            'title' => 'New notification',
            'body'  =>'This is notification'
        ]);
    }
}
