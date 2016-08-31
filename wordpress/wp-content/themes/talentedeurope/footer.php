<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>
	</div>
</div><!-- #page -->

<div class="footer">
      <div class="ue-logos row xs12">
        <div class="logo">
          <img src="https://talentedeurope.eu/img/logo-footer-erasmus.png" width="174" alt="Erasmus+">
        </div>
        <div class="logo">
          <img src="https://talentedeurope.eu/img/logo-footer-cofunded-ue.png" width="160" alt="Co-funded by the Erasmus+ Programme of the European Union">
        </div>
        <div class="logo">
          <img src="https://talentedeurope.eu/img/logo-footer-gob-espana-y-sepie.svg" width="240" alt="Gobierno de españa and Sepie">
        </div>
      </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>