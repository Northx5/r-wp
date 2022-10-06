<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package reason-wp
 */

get_header();
?>

<main class="content grid">
	
	
	
      
     
		  <?php dynamic_sidebar( 'slider-area' ); ?>
	
      
       
		  <?php dynamic_sidebar( 'info-area' ); ?>
	
      
      <section class="help">
        <div class="wrapper flex f-column justify-content-s-a">
          <h3>How can we help you?</h3>
          <p class="m-t-1 m-b-1">Let us know who you are and what you're looking for, and we'll help get you to the right place.</p>
          <form @submit.prevent="" class="info-panel flex align-items-center justify-content-center">
            <label for="entity">I am</label>
            <select name="entity" id="entity">
              <option value="individual">an individual</option>
              <option value="charity">a charity</option>
              <option value="business">a business</option>
            </select>
            <label for="want">and I want</label>
            <select name="want" id="want">
              <option value="individual">to learn</option>
              <option value="charity">to make</option>
              <option value="business">to hire</option>
            </select>
            <button class="action-button cta-link">Start now</button>
          </form>
        </div>
      </section>
      
      <section class="what-we-do">
        <div class="wrapper flex f-column justify-content-s-a">
          <?php dynamic_sidebar( 'card0-area' ); ?>
			
          <div class="cards grid">
           
			  <div class="card flex f-column justify-content-s-a">
              <?php dynamic_sidebar( 'card1-area' ); ?>
			  </div>
			  <div class="card flex f-column justify-content-s-a">
              <?php dynamic_sidebar( 'card2-area' ); ?>
           </div>
			  <div class="card flex f-column justify-content-s-a">
             	<?php dynamic_sidebar( 'card3-area' ); ?>
			  </div>
			  <div class="card flex f-column justify-content-s-a">
			   <?php dynamic_sidebar( 'card4-area' ); ?>
				  </div>
          </div>
          <a href="#" class="cta cta-link primary color-red width-25 align-self-center m-t-1">More about what we do</a>
        </div>
      </section>



    </main>


	

	

<?php
get_sidebar();
get_footer();
