 <?php
  function obtenerElemento($list){
    $countlist = count($list);
    $lastElement = $list[$countlist - 1];

    return $lastElement;
}
 function buscar($list,$property,$value){
     $filter=[];
     foreach($list as $item){
         if($item[$property] == $value){
             array_push($filter, $item);
         
     }

    }
     return $filter;

 }

 function obtenerIndex($list,$property,$value){
    $Index = 0;
    foreach($list as $key => $item){
        if($item[$property] == $value){
           $Index = $key;
        
    }

   }
    return $Index;

}


 ?>
