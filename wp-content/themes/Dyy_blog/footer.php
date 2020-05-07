<?php
/*
パーツ：フッター
*/
?>
<!-- ページフッタ -->
<footer class="l-footer">
	<p id="copyright" class="col-desk-12">&copy;2020 kasumidyaya.net</p>
</footer>
<!-- /ページフッタ -->

<?php wp_footer(); ?>
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
</div>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>
