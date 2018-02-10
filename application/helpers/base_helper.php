<?php
    
    //greeting
    function greeting()
    {
        date_default_timezone_set("Asia/Jakarta");

        $time = time();
        $hour = date("G",$time); //Fungsi untuk waktu 24 jam

        if ($hour >= 0 && $hour <= 11)
        {
            echo "Selamat Pagi";
        }
            elseif ($hour >= 12 && $hour <= 14)
        {
            echo "Selamat Siang";
        }
            elseif ($hour >=15 && $hour<=17)
        {
            echo "Selamat Sore";
        }
            elseif ($hour >=17 && $hour<=18)
        {
            echo "Selamat Petang";
        }
            elseif ($hour >=19 && $hour<=23)
        {
            echo "Selamat Malam";
        }
    }
    
    /**
     * PRINT_R HELPER FUNCTION.
     */
    function pr($something) {
        echo "<pre>";print_r($something);echo "</pre>";
    }
    /**
     * [limit_words description]
     */
    function limit_words($string, $word_limit)
    {
      $words = explode(" ", $string);
      return implode(" ", array_splice($words,0,$word_limit));
    }
    
    //date view
    function format_date()
    {
        $var = date('d/m/Y');

        $string = str_replace('/','-', $var);
        return $string;
    }

    function am($array1, $array2, $should_merge = true) {
        if ($should_merge) {
            return array_merge($array1, $array2);
        } else {
            return $array1 + $array2;
        }
    }
    
    //for seo url
    function slug($text)
    {
        //replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-',$text);
        // trim
        $text = trim($text, '-');
        //translate
        $text = iconv('utf-8','us-ascii//TRANSLIT', $text);
        //lowercase
        $text = strtolower($text);
        //remove unknown characters
        $text = preg_replace('~[^-\w]+~', '',$text);

        if(empty($text)) 
        {
            return 'n-a';
        }

        return $text;
    }

    function sendmail($params,$html = false) {
        $ci = & get_instance();
        $ci->load->library('email');

        if ($html == true) {
            $config['mailtype'] = 'html';
            $ci->email->initialize($config);
        }

        if (!isset($params['from']['email'])) $params['from']['email'] = DEFAULT_EMAIL_FROM;
        if (!isset($params['from']['name'])) $params['from']['name'] = DEFAULT_EMAIL_FROM_NAME;
        if (!isset($params['from']['return_path'])) $params['from']['return_path'] = DEFAULT_EMAIL_RETURN_PATH;

        if (isset($params['from'])) {
            $ci->email->from($params['from']['email'], $params['from']['name'], $params['from']['return_path']);
        }

        if (isset($params['reply_to'])) {
            $ci->email->reply_to($params['reply_to']['email'], $params['reply_to']['name']);
        }

        if (isset($params['to'])) {
            $ci->email->to($params['to']);
        }

        if (isset($params['cc'])) {
            $ci->email->cc($params['cc']);
        }

        if (isset($params['bcc'])) {
            $ci->email->bcc($params['bcc']);
        }

        if (isset($params['subject'])) {
            $ci->email->subject($params['subject']);
        }

        if (isset($params['message'])) {
            $ci->email->message($params['message']);
        }

        if (isset($params['attachment'])) {
            $ci->email->attach($params['attachment']);
        }

        if ( ! $ci->email->send()) {
            // Generate error
            return [
                "is_error" => true,
                "error_message" => "Email not send."
            ];
        } else {
            return [
                "is_error" => false,
                "error_message" => "Email sent."
            ];
        }
}
?>
