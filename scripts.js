jQuery('document').ready(function($) {

	var menuBtn = $('.menu-icon'),
	menu = $('.navigation ul'),
	main = $('.main');

	menuBtn.click(function() {

		if(menu.hasClass('show'))
		{
			menu.removeClass('show');
			main.removeClass('showmain');
			document.getElementById('menu').innerHTML = 'Mostrar Menu';

		} else {
			menu.addClass('show');
			main.addClass('showmain');
			document.getElementById('menu').innerHTML = 'Esconder Menu';
		}
	});
});