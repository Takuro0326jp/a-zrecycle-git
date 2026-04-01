	</main>
	<?php include( ABSPATH . '/../include/sidebar.php'); ?>
</div><!-- .contents-wrapper -->

<?php if (is_front_page()): ?>

	<!--pickup start-->
	<div class="top_purchase_items">
	<div class="top_maincolumn1-ttl mt15 mb20">
	<img src="/images/idx/maincolumn_title3_1.gif" width="137" height="25" alt="一押し商品" class="mb5" />
	</div>

	<div class="purchase_description">
	<h3 class="h3-idx-purchase">
	<img src="/images/idx/subtitle_top_column_1.gif" width="236" height="18" alt="どんなモノが買い取れるの？" />
	<img src="/images/idx/subtitle_top_column_2.gif" width="252" height="18" alt="アドア東京の買取商品について" />
	</h3>
	<p>アドア東京では、カッシーナやB&Bイタリアなどブランド家具を中心にウェグナー、アルヴァアアルトといった名作北欧家具の出張買取を行っております。<br />
		家具以外にも照明、絨毯（ラグ）、食器、絵画、アートなどインテリアにまつわるあらゆるアイテムをお取り扱いしております。<br />
      お問合せの多いブランド（一例）：IDC大塚家具、アクタス、ボーコンセプト、カッシーナ、アルフレックス、シモンズ、ヤマギワ、ハーマンミラー、<br />
		カリモク、エコーネス、IDEE（イデー）、リーンロゼ、アーロンチェア、フリッツハンセン、ジャーナルスタンダードファニチャーなど・・</p>
	</div>
	<?php
	$args = array(
		'paged' => $paged,
		'post_status' => 'publish',
		'post_type' => 'recommend',
		'posts_per_page' => 9,
	);
	query_posts($args);
	if ( have_posts() ) : ?>
	<ul class="recommend-list">
	<?php while ( have_posts() ) : the_post(); ?>
		<li class="recommend-list-item clearfix">
			<div class="item-photo">
				<?php if(post_custom( 'url' )): ?>
				<a href="<?php echo post_custom( 'url' ); ?>">
				<?php endif; ?>
					<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('large'); ?>
					<?php else: ?>
					<img src="/images/no_image.jpg" alt="No Image" />
					<?php endif; ?>
				<?php if(post_custom( 'url' )): ?>
				</a>
				<?php endif; ?>
			</div>
			<div class="item-txt clearfix">
				<?php the_content(); ?>
				<?php if(post_custom( 'url' )): ?>
				<p class="link"><a href="<?php echo post_custom( 'url' ); ?>">詳しくはこちら</a></p>
				<?php endif; ?>
			</div>
		</li>
		<?php endwhile; // 繰り返し処理終了 ?>
		</ul>
		<div class="btn-area">
			<a href="/recommend/">もっと見る</a>
		</div>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
	<!-- /pickup -->
<?php endif; ?>

<?php include( ABSPATH . '/../include/footer-links.php'); ?>

<div class="footer-description">
<?php
if (is_tax('products-item')) {
	$term_id = get_queried_object_id();
	$term_description = term_description( $term_id, 'products-item' );
	if (!empty($term_description)) {
		echo '<p>'.nl2br($term_description).'</p>';
	}
} else {
	echo '<p>アドア東京のオフィシャルサイトをご覧いただきありがとうございます。東京都内を中心に、東京都下エリア、神奈川エリア、埼玉エリア、千葉エリアを対象として、家具買取、家電買取、楽器買取を行っています。ブランド家具、北欧家具、インポート家具、ベッド、照明、チェスト、キャビネット、本棚など、全ての家具、家電を買取対象としております。あなたの思い入れのある家具や楽器だから、高価にお買取いたします。買取件数は8万件以上。まずはお気軽にお問い合わせください！</p>';
}
?>
</div><!-- .footer-description -->

</div><!-- /#contents-area -->

<?php include( ABSPATH . '/../include/site-footer.php'); ?>
</div><!-- /#page -->

<?php wp_footer(); ?>
</body>
</html>
