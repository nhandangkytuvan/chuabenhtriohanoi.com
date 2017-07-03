// JavaScript Document
document.writeln("<style type=\'text/css\'>");
document.writeln(".c_swt{position:fixed;left:0;top:100%;z-index:2147483647;width:100%;height:100%;background:rgba(0,0,0,0.8);}");
document.writeln(".c_swt_box{position:relative;width:100%;height:100%;overflow:hidden;}");

document.writeln("</style>");
document.writeln("<div id=\"c_swt\" class=\"c_swt\">");
document.writeln("    <div class=\"c_swt_box\" id=\"c_swt_box\">");
document.writeln("        <div id=\"c_btn\" class=\"c_btn\">");
document.writeln("            <img src=\"http://phongkhamnamkhang.net/public/images/chuyende/mobile/popup/c_btn.png\" alt=\"\">");
document.writeln("        </div>");


document.writeln("    </div>");
document.writeln("</div>");

$("#c_btn").on("click",function(){
	$("#c_swt").stop().animate({top:"100%"},1000,function(){
		//setTimeout("showSwt()",20000);  //
	});
});

setTimeout("showSwt()",20000);   //

function showSwt()
{
    $("#c_swt").animate({top:"0"},1000);
}

