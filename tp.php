<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Titre</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<p id="contenu">
			Lorem <span class="vert">ipsum dolor</span> sit amet, <span
			class="titre2">
			consectetur adipiscing elit</span>.Etiam <a href="#">facilisis</a>
			<span class="rouge">ultrices</span> dolor, eu <span
			class="orange">fermentum
			eros</span> aliquet ac. Aenean varius <span
			class="titre2">ultrices nisi
			</span> vel aliquet. Nam eu viverra sem. <span class="gras">Fusce
			facilisis
			</span> eros ac <span class="titre1">elit scelerisque
			molestie</span>. Morbi
			lacus orci, interdum ac <span class="souligne">faucibus
			hendrerit</span>,
			<span class="barre">facilisis vel</span> nunc. <span
			class="souligne">Sed in
			</span> <span class="bleu">mauris</span> <span
			class="gras">lorem</span>.
			Integer facilisis, <span class="italique">augue et suscipit</span>
			molestie,
			<span class="barre">lectus lectus</span> pellentesque mi, <span
			class="vert">
			at</span> condimentum <span class="italique">nulla</span> nibh ut
			turpis. <span>
			Cum sociis</span> natoque <span class="vert">penatibus et
			magnis</span> dis
			<a href="#">parturient montes</a>, nascetur ridiculus mus. Etiam
			quis nisl
			metus.<span class="vert">Phasellus</span>ullamcorper posuere augue
			quis placerat.
			<span class="titre1">Duis sed quam</span>odio. Donec <span
			class="vert">aliquam
			metus</span> a <a href="#">ligula lacinia</a> a tempor leo <span
			class="bleu">imperdiet</span>.
			Cras augue purus, <span class="souligne">lobortis eu</span>
			scelerisque sed,
			<span class="vert">venenatis ut</span> turpis. Donec <span
			class="bleu">quis
			magna sapien</span>. Ut ut diam arcu. <span
			class="souligne">Suspendisse nec
			risus</span> id lacus venenatis <a href="#">rhoncus.</a> In vitae
			<span class="vert">justo tellus</span>, <span class="bleu">vitae
			lacinia nunc
			</span>. Aliquam <span class="italique">erat</span> <span
			class="rouge">volutpat.</span>
			<b>Aliquam erat</b> <b>volutpat.</b>
		</p>

		<button onclick="semantique()">Organiser sémantiquement le texte</button>
		<button onclick="colorer()">Colorer le texte</button>
		<button onclick="mettreTitres()">Mettre des titres</button>
		<button onclick="liensEnBoutons()">Transformer les liens en	boutons</button>
		<button onclick="dupliquerTexte()">Dupliquer le texte</button>
		<button onclick="regrouperTitres()">Regrouper les titres</button>
		<button onclick="regrouperLiens()">Regrouper les liens</button>
		<button onclick="viderBoutons()">Vider les boutons</button>
		<button onclick="enleverLiens()">Enlever les liens</button>
		<button onclick="enleverGras()">Enlever le texte en gras</button>
		<button onclick="enleverItalique()">Enlever le texte en	italique</button>
		<button onclick="enleverDecor()">Enlever le texte décoré</button>
		<button onclick="voirCode()">Voir le code</button>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			function enleverLiens() {
				$('#contenu a').remove();
			}
			function enleverGras() {
				$('#contenu b').remove();
			}
			function enleverItalique() {
				$('#contenu em,#contenu i').remove();
			}
			function enleverDecor() {
				$('#contenu *:not(html):not(body):not(p):not(button)').remove();
			}
			function voirCode() {
				$('#contenu').text($('p').html());
			}
			function liensEnBoutons() {
				$('#contenu a').wrap('<button></button>');
			}
			function dupliquerTexte() {
				$('p').clone().appendTo('#contenu');
			}
			function regrouperLiens() {
				$('#contenu a').wrapAll('<div></div>');
			}
			function mettreTitres() {
				$('#contenu .titre1').wrap('<h1></h1>');
				$('#contenu .titre2').wrap('<h2></h2>');
			}
			function regrouperTitres() {
				$('h1').wrapAll('<div></div>');
				$('h2').wrapAll('<div></div>');
			}
			function colorer() {
				$('#contenu .rouge').wrap('<span style="color:red"></span>');
				$('#contenu .vert').wrap('<span style="color:green"></span>');
				$('#contenu .orange').wrap('<span style="color:orange"></span>');
				$('#contenu .bleu').wrap('<span style="color:blue"></span>');
			}
			function semantique() {
				$('#contenu .italique').wrap('<i></i>');
				$('#contenu .gras').wrap('<b></b>');
				$('#contenu .souligne').wrap('<u></u>');
				$('#contenu .barre').wrap('<del></del>');
			}
			//alert($('body').parent()[0].tagName);
			alert($('title').parents()[0].tagName);
		</script>
	</body>
</html>