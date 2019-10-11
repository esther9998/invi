var filter = "win16|win32|win64|mac|macintel"; 

if ( navigator.platform ) { 
    if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) {
        alert('온라인 초대장 편집은 PC사용을 권장 합니다.'); 
    } else { 
        //alert('pc 접속'); 
    } 
}
