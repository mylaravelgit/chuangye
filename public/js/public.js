//��Ϊ��ҳ


//ѡ��л�
function showitem1(obj,itemdl,setvalid,idcount,objcss){
	var fodinfo=document.getElementById(itemdl).getElementsByTagName("li");
	var ii = 0;
	for(var i=0;i<fodinfo.length;i++){
		if(obj==fodinfo[i]){
			fodinfo[i].className=objcss+(i+1)+'2';
			ii=i+1;
			document.getElementById(setvalid+ii).style.display="";
		}
		else{
			fodinfo[i].className=objcss+(i+1)+'1';
			ii=i+1;
			document.getElementById(setvalid+ii).style.display="none";
		}
	}
}

//�ı���ʽ
function chgClassName(id,css){
	document.getElementById(id).className = css;	
}

//�ı��б���ʽ
function chgListCSS(obj,itemdl,oncss,offcss){
	var fodinfo=document.getElementById(itemdl).getElementsByTagName("li");
	for(var i=0;i<fodinfo.length;i++){
		if(obj==fodinfo[i]){
			fodinfo[i].className=oncss;
		}
		else{
			fodinfo[i].className=offcss;
		}
	}
}

