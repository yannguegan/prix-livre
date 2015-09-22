/* Ecriture des données présentes dans le JSON */

function showInfo() {

	$.getJSON('data.json', function(data) {

	/* Ecriture des données présentes dans le fichier JSON dans le DOM */  

    var source1 = $('#handlebars_template_1').html();    
    var template1 = Handlebars.compile(source1);
    var html1 = template1(data);
    $('article').append(html1);

    /* Dessin des barres en fonction de la différence des prix ebook / poche */

	$('.poche_oui').each(function() {
		var diff_poche = $(this).attr('diff_poche');
		if (diff_poche < 0) {

			/* Si l'eBook est moins cher, on masque la barre à droite et les infos à gauche */

			$('.left .book_info',this).addClass('book_info_hidden');
			diff_poche_abs = 0-diff_poche
			$('.diff > div',this).html('-' + diff_poche_abs + '&nbsp;€');
			$('.right .bar',this).addClass('bar_hidden');			
			bar_width = ((0-diff_poche)*100)/13; 
		} else {

			/* Si l'eBook est plus cher, on masque la barre à gauche et les infos à droite */

			$('.right .book_info',this).addClass('book_info_hidden');
			$('.diff > div',this).html('+' + diff_poche + '&nbsp;€');
			$('.left .bar',this).addClass('bar_hidden');
			bar_width = diff_poche*100/13;
		}
		$('.bar',this).css('width', bar_width + '%');
	});

	/* Au clic sur la class show_more on affiche les infos détaillées  */

	$('.show_more').click( function() {
 		current_id = $(this).parents('.entry_book').attr('id');
 		$('#' + current_id + ' .more').toggleClass('more_visible'); 
 	});

    });
  
};


$(document).ready( function() {
	showInfo();




});    