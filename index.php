<html>
   <head>
       <title> xml Form </title>
   </head>
   <body>
 <?php
 if(inset($_request['ok'])){
     $xml = new DOMDocument("1.0","UTF-8");
     $lxml->load("address.xml")
  
     $addressTag = $xml->getElementsByTagName("directory")->item(0);
     
     $dataTag = $xml->createElement("person");
     
     $first_nameTag = $xml->createElement("first_name",$_REQUEST['first_name']);
     $last_nameTag = $xml->createElement("last_name",$_REQUEST['name_name']);
     $addressTag = $xml->createElement("address",$_REQUEST['address']);
     $telephoneTag = $xml->createElement("telephone",$_REQUEST['telephone']);
     
     $dataTag->appendChild($first_nameTag);
     $dataTag->appendChild($last_nameTag);
     $dataTag->appendChild($addressTag);
      $dataTag->appendChild($telephoneTag);
      
      $rootTag->appendChild($personTag);
      
      $xml->save("address.xml");
  

     
 }
 
 ?>
    <form action="index.php" method="post">
     <input type="text" name="first_name"/>
      <input type="text" name="last_name"/>  
       <input type="text" name="address"/>  
       <input type="text" name="telephone"/>  
      
        <input type="submit" name="ok" value="add"/>
        
    </form>
    </body>
    
</html>
    
