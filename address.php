<?php

$first_name = $_POST["first_name"];

if (file_exists('address.xml')) {
    //should load xml and return simplexml object
    $xml = simplexml_load_file('address.xml');
    
    //transform object in xml format
    $xmlFormat = $xml->asXML();
    //display element in proper format
     echo '<u><b>This is the xml code from address.xml:</b></u>  <br /><br />
      <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre><br /><br />';
      
      //adding new child to xml
    $newChild = $xml->addChild('person');
    $newChild->addChild('first_name', $first_name);
    $newChild->addChild('last_name', 'XML Rocks');
    $newChild->addChild('address_one', 'Computing');
    $newChild->addChild('address_two', 'FBA');
    $newChild->addChild('address_three', 'Requirement Analysis');
    $newChild->addChild('telephone', '021 8008135');
    
    //transforming object in xml format
    $xmlFormat = $xml->asXML();
    //displaying the element in proper format
    
    echo '<u><b>This is the xml code from address.xml with new elements added:</b></u>
     <br /><br />
     <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';
     
     //changing the nodes values
    //in this case we are changing the value 
    //of all children called <name>
    foreach ($xml->children() as $child)
        $child->telephone = "CHANGED";
    //displaying the element in proper format
    echo '<br /><u><b>This is the xml code from books.xml with all telephone changed:</b></u>
     <br /><br />
     <pre>' . htmlentities($xml->asXML(), ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';
}
 else {
    exit('Failed to open books.xml.');
 }
 
 file_put_contents('/home/ubuntu/workspace/books.xml', $xml->asXML());
    
    writeRSS();
    function writeRSS(){
        if (file_exists('rss.xml')) {
            //loads the xml and returns a simplexml object
            $rssxml = simplexml_load_file('rss.xml');
            $newChild = $rssxml->channel->addChild('item');
            $newChild->addChild('title', $first_name);
            $newChild->addChild('link', 'XML Rocks');
            $newChild->addChild('guid', 'Computing');
            $newChild->addChild('description', '100 $');
            file_put_contents('/home/ubuntu/workspace/rss.xml', $rssxml->asXML());
        }
    }
?>
