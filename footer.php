<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Happy_Homes
 * @since Happy Homes 1.0
 */
?>
        <div id="footer">
        	<div class="footer_topWrap">
        		<div class="footer_btmWrap">
                    <div id="footerNav">
                        <?php get_sidebar('navigation')?>
                    </div><!--end of footerNav-->
        			<?php
						/* A sidebar in the footer? Yep. You can can customize
						 * your footer with three columns of widgets.
						 */
						if ( ! is_404() )
							get_sidebar( 'footer' );
					?>
        		</div><!--end of footer_btmWrap-->
        	</div><!--end of footer_btmWrap-->
        	<div class="copyright">
        		<p>Copyright &copy; <span>Limbros Realty and Development Corp. 2012.</span> All Rights Reserved.</p>
        	</div><!--end of copyright-->
        </div><!--end of footer-->
    </div><!--end of bgWrapper1-->
</body>
</html>