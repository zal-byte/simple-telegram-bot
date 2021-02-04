<?php

    class Send{
        public $apiToken = '<YourTokenHere>';
        public $sendMessage, $sendPhoto, $sendVideo, $sendAudio;
        public function __construct(){
            $this->sendMessage = "https://api.telegram.org/bot".$this->apiToken."/sendMessage";
            $this->sendPhoto = "https://api.telegram.org/bot".$this->apiToken."/sendPhoto";
            $this->sendVideo = "https://api.telegram.org/bot".$this->apiToken."/sendVideo";
            $this->sendAudio = "https://api.telegram.org/bot".$this->apiToken."/sendAudio";
        }
        function sendMessage($param){
            file_get_contents($this->sendMessage."?".$param);
        }
        function sendPhoto($post){
        
            $sh = curl_init();
            curl_setopt($sh, CURLOPT_URL, $this->sendPhoto);
            curl_setopt($sh, CURLOPT_POSTFIELDS, $post);
            curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_HTTPHEADERS,array("Content-Type:application/x-www-form-urleconded"));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_AUTOREFERER,1);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13');
            curl_setopt($sh, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_getinfo($sh, CURLINFO_HTTP_CODE);
            $out = curl_exec($sh);
            curl_close($sh);
        }
        function sendVideo($post){
            $sh = curl_init();
            curl_setopt($sh, CURLOPT_URL, $this->sendVideo);
            curl_setopt($sh, CURLOPT_POSTFIELDS, $post);
            curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_HTTPHEADERS,array("Content-Type:application/x-www-form-urleconded"));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_AUTOREFERER,1);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13');
            curl_setopt($sh, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_getinfo($sh, CURLINFO_HTTP_CODE);
            $out = curl_exec($sh);
            curl_close($sh);
        }
        function sendAudio($post){
            $sh = curl_init();
            curl_setopt($sh, CURLOPT_URL, $this->sendAudio);
            curl_setopt($sh, CURLOPT_POSTFIELDS, $post);
            curl_setopt($sh, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($sh, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_HTTPHEADERS,array("Content-Type:application/x-www-post-urlencoded"));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_AUTOREFERER,1);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13');
            curl_setopt($sh, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_getinfo($sh, CURLINFO_HTTP_CODE);
            $out = curl_exec($sh);
            curl_close($sh);
        }
    }

?>