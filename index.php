<html>
	<head>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<style>
			.lazy{
				width:20%;
				margin-bottom:20px;
			}
		</style>
	</head>
	<body>
		<img class="lazy" src="lazy.gif" data-src="1.jpg"><br>
		<img class="lazy" src="lazy.gif" data-src="2.jpg"><br>
		<img class="lazy" src="lazy.gif" data-src="3.jpg"><br>
		<img class="lazy" src="lazy.gif" data-src="4.jpg"><br>
		<img class="lazy" src="lazy.gif" data-src="5.jpg"><br>
		<img class="lazy" src="lazy.gif" data-src="6.jpg"><br>
		<img class="lazy" src="lazy.gif" data-src="7.jpg"><br>
		<img class="lazy" src="lazy.gif" data-src="8.jpg"><br>
		
		<script>
			lazyload();
			window.onscroll = function(ev){
				lazyload();
			};
			function lazyload(){
				var lazyImage = document.getElementsByClassName('lazy');
				for(var i=0;i<lazyImage.length;i++){
					if(elementInViewport(lazyImage[i])){
						lazyImage[i].setAttribute('src',lazyImage[i].getAttribute('data-src'));
					}
				}
			}
			
			function elementInViewport(el){
				var rect = el.getBoundingClientRect();
				return (
					rect.top >= 0 &&
					rect.left >=0 &&
					rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
					rect.right <= (window.innerWidth || document.documentElement.clientWidth)
				);
			}
			
		</script>
	</body>
</html>