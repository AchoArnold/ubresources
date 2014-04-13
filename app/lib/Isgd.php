<?php

class Isgd {

    public static function shorten($url,$shorturl = null)
    {
        //$url - The original URL you want shortened
        //$shorturl - Your desired short URL (optional)

        //This function returns an array giving the results of your shortening
        //If successful $result["shortURL"] will give your new shortened URL
        //If unsuccessful $result["errorMessage"] will give an explanation of why
        //and $result["errorCode"] will give a code indicating the type of error

        //See http://v.gd/apishorteningreference.php#errcodes for an explanation of what the
        //error codes mean. In addition to that list this function can return an
        //error code of -1 meaning there was an internal error e.g. if it failed
        //to fetch the API page.
        $original_url = $url;
        $url = urlencode($url);
        $basepath = "http://is.gd/create.php?format=simple";
        //if you want to use is.gd instead, just swap the above line for the commented out one below
        //$basepath = "http://is.gd/create.php?format=simple";
        $result = array();
        $result["errorCode"] = -1;
        $result["shortURL"] = null;
        $result["errorMessage"] = null;

        //We need to set a context with ignore_errors on otherwise PHP doesn't fetch
        //page content for failure HTTP status codes (v.gd needs this to return error
        //messages when using simple format)
        $opts = array("http" => array("ignore_errors" => true));
        $context = stream_context_create($opts);

        if($shorturl)
            $path = $basepath."&shorturl=$shorturl&url=$url";
        else
            $path = $basepath."&url=$url";

        $response = @file_get_contents($path,false,$context);

        if(!isset($http_response_header))
        {
            $result["errorMessage"] = "Local error: Failed to fetch API page";
            return($result);
        }

        //Hacky way of getting the HTTP status code from the response headers
        if (!preg_match("{[0-9]{3}}",$http_response_header[0],$httpStatus))
        {
            $result["errorMessage"] = "Local error: Failed to extract HTTP status from result request";
            return($result);
        }

        $errorCode = -1;
        switch($httpStatus[0])
        {
            case 200:
                $errorCode = 0;
                break;
            case 400:
                $errorCode = 1;
                break;
            case 406:
                $errorCode = 2;
                break;
            case 502:
                $errorCode = 3;
                break;
            case 503:
                $errorCode = 4;
                break;
        }

        if($errorCode == -1)
        {
            $result["errorMessage"] = "Local error: Unexpected response code received from server";
            return($original_url);
        }

        $result["errorCode"] = $errorCode;
        if($errorCode==0)
            $result["shortURL"] = $response;
        else
        {
            $result["shortURL"] = $original_url;
            $result["errorMessage"] = $response;
        }

        return($result["shortURL"]);
    }
}