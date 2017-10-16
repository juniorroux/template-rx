// Artigos
$(document).ready(function() {
	$('.artigos-item').click(function() {
		var artigo_link = $(this).find('a').attr('href');
		location.assign(artigo_link);
	});
});