<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package solstice
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
  if ( post_password_required() ) {
    return;
  }
?>

<!-- Comments -->
<section class="post-comments">
  <!--<section class="post-comment" id="comments">-->

    <h6><?php echo get_comments_number(); ?> <?php esc_html_e('Comments', 'solstice'); ?></h6>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
      <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
        <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'solstice' ); ?></h2>
        <div class="nav-links">

          <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'solstice' ) ); ?></div>
          <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'solstice' ) ); ?></div>

        </div><!-- .nav-links -->
      </nav><!-- #comment-nav-above -->
    <?php endif; // check for comment navigation ?>

    <ul class="comments-list">
      <?php
        wp_list_comments( array(
          'callback'     => 'solstice_comment',
          'end-callback' => 'solstice_close_comment',
          'style'        => 'ul',
          'short_ping'   => true,
        ) );
      ?>
    </ul>

  <!--</section>-->
  <!-- End Comments -->

  <!-- Add Comment -->
  <div class="comment-form-container">

    <?php
      $commenter = wp_get_current_commenter();
      $req       = get_option( 'require_name_email' );
      $aria_req  = ( $req ? " aria-required='true'" : '' );

      $args = array(
        'id_form'           => 'commentform',
        'id_submit'         => 'comment_submit',
        'title_reply'       => esc_html__( 'Leave a Comment' ,'solstice'),
        'title_reply_to'    => esc_html__( 'Leave a Comment to %s'  ,'solstice'),
        'cancel_reply_link' => esc_html__( 'Cancel Comment'  ,'solstice'),
        'label_submit'      => esc_html__( 'Post Comment'  ,'solstice'),
        'comment_field'     => '
          <div class="row"><div class="col-md-12"><label>'.esc_html__('Comment','solstice').'</label><textarea name="comment" id="text" ' . $aria_req . ' class="form-control form-white placeholder" rows="10"  maxlength="400"></textarea></div>
          ',
        'must_log_in'          => '<p class="must-log-in">' .  wp_kses_post(sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ,'solstice' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) )) . '</p>',
        'logged_in_as'         => '<p class="logged-in-as">' . wp_kses_post(sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'  ,'solstice'), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) ). '</p>',
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'class_submit'         => 'btn btn-dark comment-button btn-rounded hover-effect m-t-20',
        'fields' => apply_filters( 'comment_form_default_fields',
          array(
            'author' => '
                <div class="col-md-4">
                  <!-- Name -->
                  <label>'.esc_html__('Name','solstice').' '.( $req ? ' <span class="color-red">*</span>' : '' ).'</label>
                  <input type="text" name="author" id="name" ' . $aria_req . ' class="form-control form-white placeholder" maxlength="100">
                </div>',

            'email' => '
                <div class="col-md-4">
                  <!-- Email -->
                  <label>'.esc_html__('Email','solstice').'</label>
                  <input type="email" name="email"id="email" class="form-control form-white placeholder" maxlength="100">
                </div>',

            'url' => '
              <div class="col-md-4">
                <label>'.esc_html__('Website','solstice').'</label>
                <input type="text" name="url" id="website" class="form-control form-white m-b-20 placeholder" maxlength="100"></div></div>',
          )
        )
      );
      comment_form($args);
    ?>
    <!-- End Form -->

  </div>
<!-- End Add Comment -->
</section>
