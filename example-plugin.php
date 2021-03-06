<?php
    // Copy this file into lib/plugins/ and name it appropriately. Then follow the comments in this
    // file to fill in the gaps.

    // Also, don't forget to check the $category_names variable in search.php - try to use one of
    // the categories there, but you can define your own if you need to.
    
    // Change this name
    class MyPlugin {
        // The category identifier - should be lowercase and hyphen-separated e.g. "crime"
        public $category = "";
        
        // The name identifier - should be lowercase and hyphen-separated e.g. "school-proximity"
        public $name = "";
        
        // The human-readable name - this will be displayed in the results table e.g. "School proximity"
        public $hrname = "";
        
        // The units that the results are returned in.
        public $units = "";
        
        // Should be either LOWER_IS_BETTER or HIGHER_IS_BETTER - determines which result wins.
        public $better = LOWER_IS_BETTER;
        
        // Whether the results from this are allowed to be cached.
        public $can_cache = TRUE;
        
        // The get_result method should perform the searches and return the two results.
        // $db is a mysqli object connected to the database.
        // $location is an associative array which contain the following entries:
        //     "postcode" => the postcode
        //     "lat" => the latitude
        //     "lng" => the longitude
        public function get_result($db, $location) {
            // Do something with $location
            
            // Should return a number - this is the result that is displayed.
            return $result;
        }
    }
    
    // Update the name of the class here too.
    // This inserts the plugin into the plugin index.
    $plugins[] = new MyPlugin();
?>
