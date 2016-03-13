<?php 
    //Upload a blank cookie.txt to the same directory as this file with a CHMOD/Permission to 777
    function login($url)
    {
        $fp = fopen("cookie.txt", "w");
        fclose($fp);
        $login = curl_init();
        curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
        curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
        curl_setopt($login, CURLOPT_TIMEOUT, 40000);
        curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($login, CURLOPT_URL, $url);
        curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($login, CURLOPT_POST, TRUE);

        $username[] = ['ibtehal990', 'user1', 'user2', 'user3'];
        $password[] = ['rootroot', 'pass1', 'pass2', 'pass3'];


        for ($i = 0; $i < 4; $i++)
		{
            $data = array(
                'username' => $username[$i],
                'password' => $password[$i]
            );


            curl_setopt($login, CURLOPT_POSTFIELDS, http_build_query($data));
            //curl_setopt($login, CURLOPT_FOLLOWLOCATION, true);
            ob_start();
            return curl_exec($login);
        }
        ob_end_clean();
        curl_close($login);
        unset($login);
    }



 function register($url){
        $fp = fopen("cookie.txt", "w");
        fclose($fp);
        $register = curl_init();
        curl_setopt($register, CURLOPT_COOKIEJAR, "cookie.txt");
        curl_setopt($register, CURLOPT_COOKIEFILE, "cookie.txt");
        curl_setopt($register, CURLOPT_TIMEOUT, 40000);
        curl_setopt($register, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($register, CURLOPT_URL, $url);
        curl_setopt($register, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($register, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($register, CURLOPT_POST, TRUE);

	    $email[]=['ibtehal990@gmail.com','email1','email2','email3'];
		$username[] = ['ibtehal990','user1','user2','user3'];
	    $password[] = ['rootroot','pass1','pass2','pass3'];
	     $password_confirmation[]=['rootroot','pass1','pass2','pass3'];
       // $loginUrl = 'https://en.ogame.gameforge.com/';
    
	 for($i=0;$i<4;$i++)
	 {
	 $data = array(
	'email'=>$email[$i],
    'username' => $username[$i],
    'password' => $password[$i],
	'password_confirmation'	=>$password_confirmation[$i]	 
			 );
		
	
        curl_setopt($register, CURLOPT_POSTFIELDS, http_build_query($data));
		//curl_setopt($login, CURLOPT_FOLLOWLOCATION, true);
        ob_start();
        return curl_exec ($register);
	  }
        ob_end_clean();
        curl_close ($register);
        unset($register);    
    }

   
     
    ?>

<?php
  register("http://localhost/phpproject/model/sign_up.php");
  login("http://localhost/phpproject/model/SignInValidation.php");

