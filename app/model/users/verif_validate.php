<?php
	function verif_validate($key, $user_confirmed)
	{
	    global $pdo;

	    // var_dump($key);
	    // die();

	    try
	    {
	        $req = "UPDATE tfh_users 
	        		SET user_confirmed = :user_confirmed
	        		WHERE user_key = :user_key";

	        // var_dump($key);
	        // die();

	        $query = $pdo->prepare($req);

	        $query->bindParam(':user_key', $key, PDO::PARAM_STR);
	         $query->bindParam(':user_confirmed', $user_confirmed, PDO::PARAM_INT);

	        $query->execute();

	        // var_dump($query);
	        // die();

	        return true;
	    }

	    catch(Exception $e)
	    {
	        return false;
	    }
	}