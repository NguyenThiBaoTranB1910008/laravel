<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder

{

  /**

   * Run the database seeds.

   *

   * @return void

   */

  public function run()

  {

      //tao moi admin

      $user = new User();

      $user->name = "luan-l";

      $user->email = "luan-l@fujinet.net";

      $user->password = bcrypt("admin");

      $user->admin = 1;

      $user->save();

  }

}