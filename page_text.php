<?php
function msubstr(){
	$tmpstr="";
	$strlen=$start+$len;
	for($i=0;$i<$strlen;$i++){
		if(ord(substr($str,$i,1))>0xao){
			$tmpstr.=substr($str,$i,2);
			$i++;
		}else{
			$tmpstr.=substr($str,$i,1);
		}
	}
	return $tmpstr;
}
if($page){
	$counter=file_get_content("file/file.txt");
	$lenght=strlen(unhtml($counter));
	$page_count=ceil($lenght/1050);
	$c=msubstr($counter,0,($page-1)*1050);
	$c1=msubstr($counter,0,$page*1050);
	echo substr($c,strlen($c),strlen($c1)-strlen($c));
}