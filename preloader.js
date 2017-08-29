document.body.onload = function() {
	console.log( document.querySelector('#page_preloader') );
	setTimeout(function() {
		var preloader = document.getElementById('page_preloader');
		if( !preloader.classList.contains('done') )
		{
			preloader.classList.add('done');
		}
	}, 1000);
}