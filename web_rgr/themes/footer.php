<footer id="footer_frame" class="footer_frame">
    
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
<div id="secondary-sidebar" class="footer-widget-area">
<?php dynamic_sidebar( 'footer-widget-area' ); ?>
</div>
<?php endif; ?>


</footer>

<?php wp_footer(); ?> 
</body>
</html>