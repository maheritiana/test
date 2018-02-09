<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Titre</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<p>salut a</p>
		<div id="titre">J'aime les frites.</div> 
		<h1> salut bebs</h1>
		<textarea></textarea>

		<p id="premier">
			<span class="texte">salut tout le monde</span>
			ok
			<img src="im.jpg"  width="100" height="125" alt="Premiere Photo !" />
		</p>
		<div class="contenu">
			<span>kozy mlay</span>
			<button>valider</button>
		</div>
		
		<!-- le contenu -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			//$('body').html('Hello World');		
			//$('#titre').html('Je mange une pomme');
			//alert($('#titre').html());
			//$('#titre').before('Voici le titre :');
			//textarea
			$('textarea')
				.after('<p>Veuillez ne pas poster de commentaires injurieux.</p>')
				.after('<p><strong>Merci beaucoup.</strong></p>');

			$('#titre')
				.before('Voici le titre :')
				.after('! Wahou !');

				$('#titre').insertBefore($('h1:first'));
				//$('#premier').text('<strong>les pommes</strong>');
				//alert($('#premier').html());

			$('.contenu').wrap('<strong>là</strong>');
			//$('button').clone().appendTo($('body'));
			$('button').remove();
		</script>
	</body>
</html>