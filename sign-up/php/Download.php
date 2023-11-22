<?php

/* Include the PHP functions to be used on the page */
include('common.php');

/* Output header for the page and assign title for it */
output_header("Download");

/* Output navigation bar and specify 'active' highlight */
output_navigation("notActive", "notActive", "notActive", "notActive", "active");

/* Output text information of the page */
output_content("Click here to download!", "content", "contentblock");

/* Output Download with top 10 scorers */
output_Download();

/* Output footer */
output_footer();

/* Output social media icons */
output_icons();

?>