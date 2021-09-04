<?php

try{
  throw new Exception('例外に投げます');
}catch(Exception $e){
  echo $e->getMessage(), "￥n";
}finally{
  echo "この行は実行されます" . " ¥n";
}