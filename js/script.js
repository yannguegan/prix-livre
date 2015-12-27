/* Ecriture des données présentes dans le JSON */

function showInfo() {

	$.getJSON('data.json', function(data) {

    /* Tri des données par diff de prix ebooks vs broché */

    Handlebars.registerHelper('each_by_diff_broch', function(data,options) {
	    var output = '';
	    var contextSorted = data.concat()
	        .sort( function(a,b) { return a.diff_broche - b.diff_broche } ).reverse();
	    for(var i=0, j=contextSorted.length; i<j; i++) {
	        output += options.fn(contextSorted[i]);
	    }

	    return output;
	});

    /* Tri des données par diff de prix ebooks vs poche */	

	Handlebars.registerHelper('each_by_diff_poch', function(data,options) {
	    var output = '';
	    var contextSorted = data.concat()
	        .sort( function(a,b) { return a.diff_poche - b.diff_poche } ).reverse();
	    for(var i=0, j=contextSorted.length; i<j; i++) {
	        output += options.fn(contextSorted[i]);
	    }

	    return output;
	});

    /* Ecriture des données présentes dans le fichier JSON dans le DOM */ 

	var template1 = Handlebars.compile( $('#handlebars_template_1').html() );
	$('#ebook_vs_poche .list').append( template1( data ) ); 

	var template2 = Handlebars.compile( $('#handlebars_template_2').html() );
	$('#ebook_vs_broche .list').append( template2( data ) );     


    /* Construction de la partie ebook / poche */

	$('#ebook_vs_poche .entry_book').each(function() {
		var diff_poche = $(this).attr('diff_poche');
		if (diff_poche < 0) {

			/* Si l'eBook est moins cher, on masque la barre à droite et les infos à gauche... */

			$('.left .book_info',this).addClass('book_info_hidden');
			$('.right .bar',this).addClass('bar_hidden');

			/* ... on définit la largeur de la barre */

			bar_width = ((0-diff_poche)*100)/13; 

			/* ... on écrit le prix dans la puce */

			diff_poche_abs = 0-diff_poche
			$('.diff > div',this).html('-' + diff_poche_abs + '€');

		} else {

			/* Si l'eBook est plus cher, on masque la barre à gauche et les infos à droite... */

			$('.right .book_info',this).addClass('book_info_hidden');
			$('.left .bar',this).addClass('bar_hidden');

			/* ... on définit la largeur de la barre */

			bar_width = diff_poche*100/13;

			/* ... on écrit le prix dans la puce */

			$('.diff > div',this).html('+' + diff_poche + '€');

	    }

		if (diff_poche < 0) {

			/* On passe la puce en vert */

			$('.diff',this).removeClass('diff_grey');			
			$('.diff',this).addClass('diff_green');	

			} else { if(diff_poche >0) {

			/* On passe la puce en rouge */

			$('.diff',this).removeClass('diff_grey');			
			$('.diff',this).addClass('diff_red');	

			}

		}
		$('.bar',this).css('width', bar_width + '%');
	});


    /* Construction de la partie ebook / originale */

	$('#ebook_vs_broche .entry_book').each(function() {
		var diff_broche = $(this).attr('diff_broche');

		/* On masque la barre à droite et les infos à gauche... */

		$('.left .book_info',this).addClass('book_info_hidden');
		$('.right .bar',this).addClass('bar_hidden');

		/* ... on définit la largeur de la barre */

		bar_width = ((0-diff_broche)*100)/17.5; 

		/* ... on écrit le prix dans la puce */

		diff_broche_abs = 0-diff_broche
		$('.diff > div',this).html('-' + diff_broche_abs + '&nbsp;€');

		/* On passe la puce en vert */

		$('.diff',this).removeClass('diff_grey');			
		$('.diff',this).addClass('diff_green');	

	

		$('.bar',this).css('width', bar_width + '%');
	});

	/* Selon l'URL on affiche/masque une partie */

	var currenturl = document.location.search;
	if (typeof(currenturl) != 'undefined' && currenturl != '' && currenturl != 'undefined' && currenturl != undefined) {
		var section_active = currenturl.replace('?section=','');
		$('section').hide(0);
		$('#' + section_active).show(0);

	   /* Scroller plus joli  */

		$('.list').customScroll();
	}	

	


	/* Au clic sur la class show_more on affiche les infos détaillées  */

	$('.show_more').click( function() {
 		current_id = $(this).parents('.entry_book').attr('id');
 		current_section = $(this).parents('section').attr('id');
 		$('#' + current_section + ' #' + current_id + ' .more').toggleClass('more_visible'); 
 	});

   });




  
};


$(document).ready( function() {

	showInfo();

	/* On fixe la largeur totale quand on est en local */

    if (document.domain == "localhost") {
    	$('article').css('width', '480px');
    }


});    