$(document).ready(function() {

    $('#autocomplete').autocomplete({
        serviceUrl: '/search/autocomplete',
        onSelect: function (suggestion) {
            alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
        }
    });

/*
	// Search Popoup focus
	$('body#home #search').focus(function() {
		$('.search-filter').fadeIn();
		$('.topic-panels, .contact').css({
			opacity: 0.2
		});
		$(document).bind('focusin.search-filter click.search-filter', function(e) {
			if ($(e.target).closest('.search-filter, #search').length) return;
			$(document).unbind('.search-filter');
			$('.search-filter').fadeOut();
			$('.topic-panels, .contact').css({
				opacity: 1
			});
		});
	});
	$(function() {
		$("#tags").autocomplete({
			source: "http://uuknowledgetest2.elasticbeanstalk.com/searchable/suggest",
			// source: "http://localhost:8080/uuknowledgenetwork/searchable/suggest",
			minLength: 1
		});
	});
	$(function() {
		$("#suggest-people").autocomplete({
			source: "http://uuknowledgetest2.elasticbeanstalk.com/casestudy/suggest",
			// source: "http://localhost:8080/uuknowledgenetwork/casestudy/suggest",
			minLength: 1
		});
	});
	$(function() {
		$("#suggest-lastname").autocomplete({
			source: "http://uuknowledgetest2.elasticbeanstalk.com/casestudy/suggest",
			//source: "http://localhost:8080/uuknowledgenetwork/casestudy/suggestLastname",
			minLength: 1
		});
	});
*/
});