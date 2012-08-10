<?php
	require_once "../lib/distance.php"; // uses different file
	
	class Hospitals {
		public $category = "proximities";			// Category identifier - lowercase and hyphen-separated
		public $name = "hospital-distance";		// Name identifier - ""
		public $hrname = "Nearest hospital";	// Displayed in results table
		public $units = "km";						// Units of the results
		public $better = LOWER_IS_BETTER;		// LOWER_IS_BETTER or HIGHER_IS_BETTER - determines winner
		public $can_cache = FALSE;					// If results are cached or not
		
		// The get_result method should perform the searches and return the two results.
		// $db is a mysqli object connected to the database.
		// $location is an associative array which contains: "postcode", "lat", "lng"
		public function get_result($db, $loc) {
			return dist_to_result($loc["postcode"],"hospital",$loc["lat"],$loc["lng"]) / 1000;
		}
	}
	
	// Train stations
	
	class TrainStations {
		public $category = "proximities";
		public $name = "train-station-distance";
		public $hrname = "Nearest train station";
		public $units = "km";
		public $better = LOWER_IS_BETTER;
		public $can_cache = FALSE;
		
		public function get_result($db, $loc) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
			return get_first_by_text_search($loc["postcode"],"train+station") / 1000;
=======
=======
>>>>>>> fe81428a31be2980a1461305acdf296d0424242b
=======
>>>>>>> c0bc63283f57bbfc65f9b5187dd598db49b53c5c
			$closest=get_first_by_text_search($loc["postcode"],"train+station") / 1000;
			//echo $loc["lat"].",".$loc["lng"];
			echo json_encode(array($loc["lat"],$loc["lng"]));
			return dist_between_geo(array($loc["lat"],$loc["lng"]),$closest["geo"]);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c474b309234935037f4fdd80913b3ceeb9c77e87
=======
>>>>>>> fe81428a31be2980a1461305acdf296d0424242b
=======
>>>>>>> c0bc63283f57bbfc65f9b5187dd598db49b53c5c
		}
	}
	
	$plugins["hospital-distance"] = new Hospitals(); // Inserts the plugin into the plugin index
	$plugins["train-station-distance"] = new TrainStations();
?>
