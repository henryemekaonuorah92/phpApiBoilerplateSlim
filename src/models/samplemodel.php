<?php


function getAllMerchantbyPOS($merch,$store){

  $db= new db();

  $db = $db->connect();

  $sql = "SELECT * FROM merchantprofile WHERE MerchantId = '$merch' AND Status = 1 AND 
  ((Store LIKE '$store' OR Store LIKE '$store,%' OR Store LIKE '%,$store,%' OR Store LIKE '%,$store') 
  OR (Role = 1))";
  
  $stmt = $db->query($sql);
  $returnale = $stmt->fetchAll(PDO::FETCH_OBJ);
  $db= null;
  return $returnale;
}