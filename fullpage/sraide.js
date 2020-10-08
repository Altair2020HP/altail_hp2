$(function(){
    var w_size = $(window).width();
    var min_size = 980;
    var menu = false;
    
    //ディスプレイが小さくなった時（スマホ表示）
    if(w_size <= min_size){
        $("#box").css({
           'display':'none' 
        });
        
        $("#menu").attr('id', 'smartmenu');
        $('#menubar').addClass('smartmenu');
        
        $("#home img.logo").css({
            'margin-top':'0'
        });
        
        //プルダウンメニューの開閉
        $("#menubuttom").click(function(){
            if(menu == false){
                   $("#dropmenu").addClass("dropmenu"); 
                    menu = true;
            }else{
                   $("#dropmenu").removeClass("dropmenu"); 
                    menu = false;
            }
        });
        
        $("#linkmenu").click(function(){
           $("#dropmenu").removeClass("dropmenu");
        });
        
    }else{
        $("#menubar").attr('id', 'smartmenu');   
    }
    
    //スライド制御
    var arr = ['1','2','3','4','5'];
    var i = 0;
    setInterval(function(){
        $("#box #" + arr[i]).css({
            'filter': 'opacity(1)',
            'transition':'1.5s'
        });
        $("#box #" + arr[i - 1]).css({
            'filter':'opacity(0)',
            'transition':'1.5s'
        });
        i++;
        if(i > arr.length){ 
            i = 1;
            $("#box #1").css({
                'filter':'opacity(1)',
                'transition':'1.5s'
            });
            $("#box #" + arr.length).css({
                'filter':'opacity(0)',
                'transition':'1.5s'
            });
        }
    }, 4000);
});
