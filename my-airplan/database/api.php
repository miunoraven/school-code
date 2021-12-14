<?php
	class API{

		private $response;

		public function getJSon($start, $end){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
			
			curl_setopt_array($curl, [
				CURLOPT_URL => "https://aerodatabox.p.rapidapi.com/flights/airports/icao/EBBR/$start/$end?withLeg=true&withCancelled=true&withCodeshared=true&withCargo=true&withPrivate=true&withLocation=false",
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => [
					"x-rapidapi-host: aerodatabox.p.rapidapi.com",
					"x-rapidapi-key: 27dfaea46cmsh079a1a851443691p1bb619jsn2e2776ada877"
				],
			]);

			$this->response = curl_exec($curl);
			$err = curl_error($curl);
			
			curl_close($curl);
			
			if ($err) {
				echo "cURL Error #:" . $err;
			}
			$jsonObject = json_decode($this->response);
			return $jsonObject;
		}
	}

