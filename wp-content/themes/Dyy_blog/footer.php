<?php
/*
パーツ：フッター
*/
?>
<!-- ページフッタ -->
<footer class="l-footer">
	<p id="copyright" class="col-desk-12">&copy;kasumidyaya</p>
</footer>
<!-- /ページフッタ -->

<?php wp_footer(); ?>
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
</div>
</body>
</html>
