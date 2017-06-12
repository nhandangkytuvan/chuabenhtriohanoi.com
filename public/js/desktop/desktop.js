$(document).ready(function() {
	$('#popup-desktop').popup({
        blur:true,
        transition: 'all 3s',
        scrolllock: false,
        background: false,
        backgroundactive:false,
        onclose: function() {setTimeout(showchat, 20000);}
    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 1000);
    }
    //
    $(".tabs2 tr td").hover(function() {
    	var indexTd = $(this).index();
    	$(this).addClass('active2');
    	$(this).siblings('td').removeClass('active2');
    	$(this).parents('.tabs2').next('.contents2').children('div').eq(indexTd).addClass('active');
    	$(this).parents('.tabs2').next('.contents2').children('div').eq(indexTd).siblings('div').removeClass('active');
    }, function() {
    	
    });
    //
    $("div.row3 .flex1col3 table.footer tr td").hover(function() {
    	$(this).find('i').addClass('active');
    }, function() {
    	$(this).find('i').removeClass('active');
    });
    //
    $("div.row3 .flex1col3 table.footer tr td:nth-child(2n+2)").hover(function() {
    	$(this).prev('td').find('i').addClass('active');
    }, function() {
    	$(this).prev('td').find('i').removeClass('active');
    });
    //
    $("div.row3 .flex2col1").hover(function() {
    	$(this).addClass('active');
    	$(this).find('i').addClass('active')
    	$(this).siblings('div').removeClass('active');
    	$(this).siblings('div').find('i').removeClass('active');
    	var indexFlex = $(this).index();
    	$(this).parents('div.tabs').siblings('div.posts').children('div').eq(indexFlex).addClass('active');
    	$(this).parents('div.tabs').siblings('div.posts').children('div').eq(indexFlex).siblings('div').removeClass('active');
    }, function() {

    });
    //
    $("footer .table2 .table3 td a").hover(function() {
    	$(this).find('i').addClass('active');
    }, function() {
    	$(this).find('i').removeClass('active');
    });
    //
    $('.toolbar2').scrollToFixed( { bottom: 0 } );
    //
    $("div.row1 .item").hover(function() {
    	$(this).addClass('active');
    	$(this).siblings('div.item').removeClass('active');
    }, function() {
    	
    });
    //
    window.setInterval(function(){
        $("#popup-desktop >.content-popup>.linktv >.table1 tr td:nth-child(2) a").toggleClass('active');
        $("#popup-desktop >.content-popup>.nhapsodienthoai button").toggleClass('active');
    }, 1000);
});
//
function open_tuvan(){
	window.open("http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en","_blank");
}
//
function showchat() {
    $('#popup-desktop').popup('show');
}