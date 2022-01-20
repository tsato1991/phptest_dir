<?php namespace Track;

function main($lines) {
  $tmp = explode(" ", $lines[0]);
  $dir1 = explode("/", ltrim(rtrim($tmp[0],"/"),"/"));
  $dir2 = explode("/", ltrim(rtrim($tmp[1],"/"),"/"));

  $dir1_count = count($dir1);
  $dir2_count = count($dir2);

  $equaldircnt = 0;

  if($dir1[0] == ""){
    echo $dir2_count;
    exit;
  }

  if($dir2[0] == ""){
    echo $dir1_count;
    exit;
  }

  $count = 0;//重複
  $flg = false;
  foreach($dir1 as $k=>$v){
    if(empty($dir2[$k])) continue;

    if($dir1[$k] == $dir2[$k] && !$flg){
      $equaldircnt++;
    }else{
      $flg = true;
    }
  }

  $backcount = $dir2_count - $equaldircnt;
  $movecount = $dir1_count - $equaldircnt;
  echo $backcount + $movecount;

}

$array = array();
while (true) {
  $stdin = fgets(STDIN);
  if ($stdin == "") {
    break;
  }
  $array[] = rtrim($stdin);
}
main($array);
