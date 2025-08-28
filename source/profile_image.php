<?php

    //Find the user's profile picture, if they have uploaded one
    if($profile['profileImage']==1){
        if(file_exists("uploads/profile".$profile['id'].".png"))
            $image="uploads/profile".$profile['id'].".png";
        elseif(file_exists("uploads/profile".$profile['id'].".jpg"))
            $image="uploads/profile".$profile['id'].".jpg";
        elseif(file_exists("uploads/profile".$profile['id'].".jpeg"))
            $image="uploads/profile".$profile['id'].".jpeg";
        $image.="?".mt_rand();
    }
    else{
        $image="uploads/profiledefault.jpg";    //Else get the default profile image
    }
?>