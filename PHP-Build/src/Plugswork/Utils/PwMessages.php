<?php
#  ____  _                                    _    
# |  _ \| |_   _  __ _ _____      _____  _ __| | __
# | |_) | | | | |/ _` / __\ \ /\ / / _ \| '__| |/ /
# |  __/| | |_| | (_| \__ \\ V  V / (_) | |  |   < 
# |_|   |_|\__,_|\__, |___/ \_/\_/ \___/|_|  |_|\_\
#                |___/
# @copyright (c) 2016 All rights reserved, Plugswork
# @author    Plugswork Codx
# @website   https://plugswork.com/

namespace Plugswork\Utils;

class PwMessages{
    
    private $messages;
    
    public function __construct($messages){
        foreach($messages as $key => $message){
            $keys = explode("-", $key);
            $this->messages[$keys[0]][$keys[1]] = $message;
        }
    }
    
    public static function translate($key){
        $keys = explode("-", $key);
        if(empty($msg = $this->messages[$keys[0]][$keys[1]])){
            return $key;
        }else{
            return $msg;
        }
    }
}