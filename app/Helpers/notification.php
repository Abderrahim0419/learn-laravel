<?php
function notification()
{
   $test =Illuminate\Support\Facades\DB::table('notifications')
  ->where('read_at',null)
   ->get();
   // dd($test);
   return auth()->user()->unreadNotifications;
}



?>