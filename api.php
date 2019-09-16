<?php
//original link
//https://net.detik.org/pub?mod=xmppsender&user=xxxxxxxxx&password=xxxxxxxxxxx&kepada=xxxxxxxx&pesan=xxxxxxxxxxx

class jsonp{
	
	public function __construct($params){	
		$this->domain='https://net.detik.org/pub';
	}
	
	private function makeRequest ($params) {
            $url = $this->domain;
            $fieldsString = http_build_query($params);
            $ch = curl_init();
            if($method == 'POST'){
				curl_setopt($ch,CURLOPT_POST, count($params));
                curl_setopt($ch,CURLOPT_POSTFIELDS, $fieldsString);
            }
            else{
                $url .= '?'.$fieldsString;
            }
            
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_HEADER , false);  // we want headers
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $result = curl_exec ($ch);
            $return['response'] = json_decode($result,true);
            if($return['response'] == false)
            $return['response'] = $result;
            $return['status'] =curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close ($ch);
            return $return;
    }
    public function connectApi($params){
		$callback=$this->makeRequest($params);
		return $callback;
	}
	
}
