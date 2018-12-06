<!DOCTYPE html>
<html><body>
<h1>Some random numbers:</h1>
<pre>
<?php 
        // create curl resource 
        $ch = curl_init(); 
        // set url 
        //curl_setopt($ch, CURLOPT_URL, "C2:8080"); 
	curl_setopt($ch, CURLOPT_URL, "10.0.3.12:8080");
        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // $output contains the output string 
        $output = curl_exec($ch); 
        // close curl resource to free up system resources
        curl_close($ch);
        print $output;
?>
</br>
<b>Brought to you by:</b><i> Daniel K. S., Frederik B. F. & Sune L. S.</i>
</body></html>

