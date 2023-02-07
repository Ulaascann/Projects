<?php


function siriusdigital($s) {
$tr=array('ş','Ş','ı','I','i','İ','ğ','Ğ','ü','Ü','ö','Ö','ç','Ç','(',')','/',' ',',','?');
$eng=array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','');
$s=str_replace($tr,$eng,$s);
$s=strtolower($s);
$s=preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;', '',$s);
$s=preg_replace('/\s+/','-',$s);
$s=preg_replace('|-+|','-',$s);
$s=preg_replace('/#/','',$s);
$s=preg_replace('.','',$s);
$s=trim($s,'-');
return $s;

}
#detay-<?=siriusdigital($hizmetcek['hizmet_baslik']).'-'.$hizmetcek['hizmet_id'] ?>

?>