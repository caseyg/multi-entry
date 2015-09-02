  <footer class="footer cf" role="contentinfo">
    
	<div class="copyright">
      <p>Multi Entry is made by <a href="http://www.christinaxu.org">Christina Xu</a>.</p>
    </div>
    <div class="colophon">
      The site is made with <a href="http://getkirby.com/made-with-kirby-and-love">Kirby</a> and <b>♥</b> by <a href="http://caseyagollan.com/">CaseyG</a>
    </div>

  </footer>
  <script>
		function getHashFilter() {
		  var hash = location.hash;
		  // get filter=filterName
		  var matches = location.hash.match( /filter=([^&]+)/i );
		  var hashFilter = matches && matches[1];
		  return hashFilter && decodeURIComponent( hashFilter );
		}

		$( function() {

		  var $container = $('.grid');

		  // bind filter button click
		  var $filters = $('.filter-button-group').on( 'click', 'a', function() {
		    var filterAttr = $( this ).attr('data-filter');
		    // set filter in hash
		    location.hash = 'filter=' + encodeURIComponent( filterAttr );
		  });

		  var isIsotopeInit = false;

		  function onHashchange() {
		    var hashFilter = getHashFilter();
		    if ( !hashFilter && isIsotopeInit ) {
		      return;
		    }
		    isIsotopeInit = true;
		    // filter isotope
		    $('.grid').imagesLoaded( function() {
			    $container.isotope({
			      itemSelector: 'li',
			      filter: hashFilter
			    });
				});
		    // set selected class on button
		    if ( hashFilter ) {
		      $filters.find('.is-checked').removeClass('is-checked');
		      $filters.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
		    }
		  }

		  $(window).on( 'hashchange', onHashchange );
		  // trigger event handler to init Isotope
		  onHashchange();
		});
  </script>
</body>
</html>