// JavaScript Document

var url = window.location.search;
x=0;
if(window.location.search){
if (url.match("x").length > 0) {
	x=getUrlVars();
}
else if(url.match("session_expire").length>0){
alert("Session Expired");
	
}
}


function addpost()
  {
	var val=document.getElementById("name").value;
	if(val!='') {
    var data=$("#adduserform").serialize();
                $.ajax({
                    type: "POST",
                    url: "add.php?x="+x[x[0]],
                    data: data,
                    dataType: "html",
                });
	document.getElementById("name").value='';
				}
				
            }




function request_send_accept_response(id1,id2,response){
	//alert(id1+" "+id2+" "+response);
	 $.ajax({
                    type: "GET",
                    url: "request_send_accept_response.php?id1="+id1+"&id2="+id2+"&response="+response,
                    
                });
				
				
	
}

 function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

var c3=0;
var t3;
var timer_is_on3=0;

function timer()
{

$.get('session_expire.php', function(data){
			
});
t3=setTimeout("timer()",60000);
}

function startTimer()
{
if (!timer_is_on3)
  {
  timer_is_on3=1;
  timer();
  }
}



var c4=0;
var t4;
var timer_is_on4=0;

function timer1()
{

$.get('chat_list.php', function(data){
$('#left_panel').html(data);			
});
t4=setTimeout("timer1()",1000);
}

function startTimer1()
{
if (!timer_is_on4)
  {
  timer_is_on4=1;
  timer1();
  }
}

var c5=0;
var t5;
var timer_is_on5=0;

function timer2()
{

$.get('chat_notification.php', function(data){
$('#chat_notifications').html(data);			
});
t4=setTimeout("timer2()",1000);
}

function startchatnotitimer()
{
if (!timer_is_on5)
  {
  timer_is_on5=1;
  timer2();
  }
}


var timer_is_on=0;
var timer_is_on2=0;


function timedCount()
{
	
$.get('check_new.php?x='+x[x[0]], function(data){
$('#chat').html(data);
});
setTimeout("timedCount()",100);
}


function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}



function timedCount2()
{
$.get('friend_list.php', function(data){
$('#friend_list').html(data);

});
$.get('friend_request.php', function(data){
$('#friend_request_list').html(data);

});
$.get('friend_suggestion.php', function(data){
$('#friend_suggestion_list').html(data);

});


$.get('check_online.php', function(data){
$('#online_friend_list').html(data);

});


setTimeout("timedCount2()",1000);
}

function doTimer2()
{
if (!timer_is_on2)
  {
  timer_is_on2=1;
  timedCount2();
  }
}



