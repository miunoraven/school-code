<?php
	include "databases.php";
	class API{

		// public $response;
		
		public function getJSon($start, $end){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
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

			$response = curl_exec($curl);
			$err = curl_error($curl);
			
			curl_close($curl);
			
			if ($err) {
				echo "cURL Error #:" . $err;
				die();
			}
			$json = json_decode($response);
			return $json;
			// var_dump($myObj->departures[0]->arrival->airport->iata);
			// var_dump($myObj);
		}	

		public function findFlight($flightnumber, $json){
			$departures = $json->departures;
			for($i = 0; $i < sizeof($departures);$i++){
				if($departures[$i]->number==$flightnumber){
					$icao = $departures[$i]->arrival->airport->icao;
					$data = new Database();
					$airports = $data->getData("airports");
					for($j = 0; $j < sizeof($airports);$j++){
						if($icao == $airports[$j]["icao"]){
							echo "Flight to ". $airports[$j]["name"];
						}
					}
				}
			}
		}
	}

