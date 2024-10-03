<?php /** @var $show string */ ?>
<ul class="wpm-language-switcher wpm-switcher-<?php echo esc_attr( $type ); ?>">
	<li class="wpm-item-language-main wpm-item-language-<?php echo esc_attr( $lang ); ?>">
				<span>
					<?php if ( ( ( 'flag' === $show ) || ( 'both' === $show ) ) && ( $languages[ $lang ] ['flag'] ) ) { ?>
						<img src="<?php echo esc_url( wpm_get_flag_url( $languages[ $lang ]['flag'] ) ); ?>" alt="<?php echo esc_attr( $languages[ $lang ]['name'] ); ?>">
					<?php } ?>
					<?php if ( ( 'name' === $show ) || ( 'both' === $show ) ) { ?>
						<span><?php echo esc_html( $languages[ $lang ]['name'] ); ?></span>
					<?php } ?>
				</span>
		<ul class="wpm-language-dropdown">
			<?php foreach ( $languages as $code => $language ) { if ( wpm_get_language() == $code ) continue; ?>
				<li class="wpm-item-language-<?php echo esc_attr( $code ); ?><?php if ( $code === $lang ) { ?> active<?php } ?>">
					<a href="<?php echo esc_url( wpm_translate_current_url( $code ) ); ?>" data-lang="<?php echo esc_attr( $code ); ?>">
						<?php if ( ( ( 'flag' === $show ) || ( 'both' === $show ) ) && ( $language['flag'] ) ) { ?>
							<img src="<?php echo esc_url( wpm_get_flag_url( $language['flag'] ) ); ?>" alt="<?php echo esc_attr( $language['name'] ); ?>">
						<?php } ?>
						<?php if ( ( 'name' === $show ) || ( 'both' === $show ) ) { ?>
							<span><?php echo esc_html( $language['name'] ); ?></span>
						<?php } ?>
					</a>
				</li>
			<?php } ?>
		</ul>
	</li>
</ul>
