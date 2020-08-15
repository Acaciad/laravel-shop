	<!-- top -->
	<div class="container my-2 py-2">
		<div class="row">
			<div class="col-sm-4 top">
				<img src="images/log.png">
			</div>
			<div class="col-sm-8">
				<form class="form-inline my-4" action="" method="get">
					<div class="form-group mb-2 search_box">
						<i class="icon iconfont iconsousuo search-s"></i>
						<input  class="form-control" type="text" placeholder="请输入关键字" name="word">				    
					</div>					
						<button type="submit" class="search_btn mb-1">搜索</button>						
				</form>
				<div class="hot_search_nav">
              	<span>热门搜索：</span>
              	<a href="">大米</a>
              	<a href="">干菌子</a>
              	<a href="">食用油</a>
          		</div>
			</div>
		</div>
	</div>
	<!-- top -->
	
	<style>
#flash{width:1200px;height: 535px;margin: 50px auto;position: relative;}
#flash #play{width:1200px;height: 535px;list-style: none;position:absolute;top:0px;left:0px;}
#flash #play li{display: none;position:absolute;top:0px;left:0px;}
#flash #play li img{float: left;}
#button{position: absolute;bottom:20px;left:470px;list-style: none;}
#button li{margin-left: 10px;float: left;}
#button li div{width:12px;height: 12px;background:#DDDDDD;border-radius: 6px;cursor: pointer;}
#prev{width:40px;height:63px;background:url(images/beijing.png) 0px 0px;position: absolute;top:205px;left:10px;z-index: 1000;}
#next{width:40px;height:63px;background:url(images/beijing.png) -40px 0px;position: absolute;top:205px;right:10px;z-index: 1000;}
#prev:hover{background:url(images/beijing.png) 0px -62px;}
#next:hover{background:url(images/beijing.png) -40px -62px;}
</style>

<script>
	window.onload=function()
{
		 var oPlay=document.getElementById('play');
		 var aLi=oPlay.getElementsByTagName('li');
		 var oButton=document.getElementById('button');
		 var aDiv=oButton.getElementsByTagName('div');
		 var oPrev=document.getElementById('prev');
		 var oNext=document.getElementById('next');
		 var oFlash=document.getElementById('flash');
		 var now=0;
		 var timer2=null;
		 for(var i=0; i<aDiv.length; i++) {
		 	aDiv[i].index=i;
		 	aDiv[i].onmouseover=function(){
		 		if(now==this.index) return;
		 		now=this.index;
		 		tab();
		 	}
		 }
		 oPrev.onclick=function(){
		 	now--;
		 	if(now==-1){
		 		now=aDiv.length-1;
		 	}
		 	tab();
		 }
		 oNext.onclick=function(){
		 	now++;
		 	if(now==aDiv.length){
		 		now=0;
		 	}
		 	tab();
		 }
		 oFlash.onmouseover=function()
		{
		    clearInterval(timer2);
		}
		 oFlash.onmouseout=function()
		{
			timer2=setInterval(oNext.onclick,4000);
		}
		 timer2=setInterval(oNext.onclick,5000);
		 function tab(){
		 	for(var i=0; i<aLi.length; i++){
		 		aLi[i].style.display='none';
		 	}
		 	for(var i=0; i<aDiv.length; i++) {
		 		aDiv[i].style.background="#DDDDDD";
		 	}
		 	aDiv[now].style.background='#A10000';
		 	aLi[now].style.display='block';
		 	aLi[now].style.opacity=0;
		 	aLi[now].style.filter="alpha(opacity=0)";
		 	jianbian(aLi[now]);
		 }
		function jianbian(obj){
			var alpha=0;
			clearInterval(timer);
			var timer=setInterval(function(){
				alpha++;
				obj.style.opacity=alpha/100;
				obj.style.filter="alpha(opacity="+alpha+")";
				if(alpha==100) {
					clearInterval(timer);
				}
			},10);
		}
}
</script>
 <div id="flash">
     <div id="prev"></div>
     <div id="next"></div>
	 <ul id="play">
	 	<li style="display: block;"><img src="images/1.jpg" alt="" /></li>
	 	<li><img src="images/2.jpg" alt="" /></li>
	 	<li><img src="images/3.jpg" alt="" /></li>
	 	<li><img src="images/4.jpg" alt="" /></li>
	 	<li><img src="images/5.jpg" alt="" /></li>
	 	<li><img src="images/6.jpg" alt="" /></li>
	 	<li><img src="images/7.jpg" alt="" /></li>
	 	<li><img src="images/8.jpg" alt="" /></li>
	 </ul>
	 <ul id="button">
	 	<li><div style="background: #A10000;"></div></li>
	 	<li><div></div></li>
	 	<li><div></div></li>
	 	<li><div></div></li>
	 	<li><div></div></li>
	 	<li><div></div></li>
	 	<li><div></div></li>
	 	<li><div></div></li>
	 </ul>
 </div>

	
