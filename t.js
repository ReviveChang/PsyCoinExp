var images = new Array()
function preload() {
    for (i = 0; i < 14; i++) {
        images[i] = new Image()
        images[i].src = "/img/"+i+".jpg";
    }
}
preload();
var tiMe=0,st=0,step=0,stepLoc,inv,Fal,score=0;
var length=200-1;
var sco=new Array(),tim=new Array();

function rea(){
    document.getElementById("time").innerHTML="";
    $('.work').css("display","inline");
    $('#buttons').hide();
    document.getElementById("tmg").setAttribute("alt","Press Start to Begin");
}
function ready(){
    document.getElementById("time").innerHTML="Loading..."
    document.getElementById("player").addEventListener("canplaythrough",rea());
}
function countDown(){
    setTimeout(function(){start()},5000);
    $('#start').hide();
    document.getElementById("tmg").setAttribute("alt","Get Ready?");
}
function start(){
    function myTimer(){
        tiMe+=100;
        st+=100;
    }
    $('#buttons').show();
    inv=setInterval(function(){myTimer()},100);
    var play=document.getElementById("player");
    play.play();
    changeImg();
}
function changeImg(){
    function getLoc(num){
        return "/img/"+num+".jpg";
    }
    function getNum(l){
        function setFal(){
            Fal=Math.floor(10*Math.random());
        }
        if(l%10==0) setFal();
        if(l%10==Fal) return Math.ceil(13*Math.random());
        else return 0;
    }
    var lst=step,num=getNum(lst);
    stepLoc=getLoc(num);
    document.getElementById("time").innerHTML="Total:"+(lst+1)+'/'+(length+1);
    document.getElementById("tmg").setAttribute("src",stepLoc);
}


function myYes(){
    check(true);
}

function myNo(){
    check(false);
}
function check(alt){
    function stepScoreset(cho,stp){
        if(cho==(stepLoc=="/img/0.jpg")) {sco[stp]=1;score++;}
        else sco[stp]=0;
    }
    function stepTimeset(stp){
        tim[stp]=st;
        st=0;
    }
    function nextStep(){
        if(step!=length){
            step++;
            changeImg();
        }
        else end();
    }
    var stp1=step;
    stepTimeset(stp1);
    stepScoreset(alt,stp1);
    nextStep();
}
function end(){
    clearInterval(inv);
    $('#buttons').hide();
    ckSet();
    hrefSet();
    document.getElementById("time").innerHTML="Total time:"+tiMe;
    document.getElementById("deb").innerHTML="End!<br/>score:"+score;
}


/*function getCookie(cname)
{
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) 
  {
    var c = ca[i].trim();
    if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
  return "????";
}*/
