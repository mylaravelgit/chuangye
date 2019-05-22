//屏蔽F12
document.onkeydown = function() {
	if(window.event && window.event.keyCode == 123) {
		event.keyCode = 0;
		event.returnValue = false;
	}
	 //屏蔽退格删除键 
    //if(event.keyCode==8){
     //  return false; 
    //}
        
    //屏蔽F5刷新键 
    if(event.keyCode==116){
       return false; 
    }
 
   //屏蔽alt+R 
   if((event.ctrlKey) && (event.keyCode==82)){
      return false; 
   }
}

//屏蔽右键菜单
document.oncontextmenu = function (event){
	if(window.event){
	event = window.event;
	}try{
	var the = event.srcElement;
	if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){
	return false;
	}
	return true;
	}catch (e){
	return false;
	}
}