	//•`‰æ—Ìˆæ‚ÌÝ’è

	var paper8 = Raphael("svg8", 800, 120);

	//‰~‚ð•`‰æ‚·‚éB

	var circle8 = paper8.circle(100, 60, 50);

	circle8.attr({

	    'fill' : '#87CEFA',

	    'stroke' : '#1E90FF',

	    'stroke-width' : 4

	});

	circle8.state = 'before';

$(window).scroll(function(){
														
	var itemTop = $("#svg8").offset().top,
			itemHeight = $("#svg8").height(),
			scrTop = $(window).scrollTop(),
			winHeight = $(window).height();
			
	if (scrTop > itemTop - winHeight + 100 && scrTop < itemTop + itemHeight){
		
	    if (circle8.state === 'before') {

	      circle8.animate({'cx':300, 'fill' : '#F08080', 'stroke' : '#CD5C5C'},

	      1500,

	      'bounce',

	      function(event){

	          circle8.state = 'after';

	      });

	    } else {

	      circle8.animate({'cx':100, 'fill' : '#87CEFA', 'stroke' : '#1E90FF'},

	      1500,

	      'bounce',

	      function(event){

	          circle8.state = 'before';

	      });

	    }
	
	}
	
});
	
	
	circle8.click(function(event){

	    if (this.state === 'before') {

	      this.animate({'cx':300, 'fill' : '#F08080', 'stroke' : '#CD5C5C'},

	      1500,

	      'bounce',

	      function(event){

	          this.state = 'after';

	      });

	    } else {

	      this.animate({'cx':100, 'fill' : '#87CEFA', 'stroke' : '#1E90FF'},

	      1500,

	      'bounce',

	      function(event){

	          this.state = 'before';

	      });

	    }

	});
