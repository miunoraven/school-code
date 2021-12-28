<?php
	include "databases.php";
	class API{

		// public $response;
		public $json;
		
		public function getJSon($start, $end, $airport){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
			
			curl_setopt_array($curl, [
				CURLOPT_URL => "https://aerodatabox.p.rapidapi.com/flights/airports/icao/$airport/$start/$end?withLeg=true&withCancelled=true&withCodeshared=true&withCargo=true&withPrivate=true&withLocation=false",
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
			$this->json = json_decode($response); //get the json --> call as object
		}	

		public function findAirport($icao){
			$data = new Database();
			$airports = $data->getData("airports");
			for($i = 0; $i < sizeof($airports);$i++){
				if($icao == $airports[$i]["icao"]){
					return $airports[$i]; //return the airport name, icao and iata
				}
			}
			echo "Could not find the airport";
		}
		

		public function findFlight($flightnumber, $departure){
			$flights = $this->json->departures;
			
			$dep_airport = $this->findAirport($departure);
			$dep_name = $dep_airport["name"];

			if($dep_airport["continent"] == "EU"){
				$gate = "A";
			}
			else if($dep_airport["continent"] == "AF"){
				$gate = "T";
			}
			else $gate = "B";
			
			for($i = 0; $i < sizeof($flights);$i++){
				if($flights[$i]->number==$flightnumber){

					$icao = $flights[$i]->arrival->airport->icao;
					$arr_airport = $this->findAirport($icao);
					$arr_name = $arr_airport["name"];

					$dep_time = $flights[$i]->departure->scheduledTimeLocal;
					if(count((array)$flights[$i]->departure) > 3){
						$checkin = $flights[$i]->departure->checkInDesk;
					}
					else $checkin = "Unknown";
					$status = $flights[$i]->status;
					$airline = $flights[$i]->airline->name;

					$flight = [	"flight_number" => $flightnumber,
								"dep_name" => $dep_name,
								"arr_name" => $arr_name,
								"dep_time" => $dep_time,
								"checkin" => $checkin,
								"gate" => $gate,
								"status" => $status,
								"airline" => $airline
							];
					
					return $flight;
				}
			}

			echo "Could not make a flight";
			
		}
	}

