<?php

namespace App\Traits;

use App\Friendship;

trait Friendable
{
	public function test()
	{
		return 'hello';
	}

	 public function addFriend($id){
        
        $Friendship = Friendship::create([
            
            'requester' => $this->id, // who is logged in
            'user_requested' => $id,
        ]);
        
        if($Friendship)
        {
            
            return $Friendship;
        }
        
        return 'failed';
                
    }
}