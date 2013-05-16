// JavaScript Document



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
