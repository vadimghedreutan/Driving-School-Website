<?php 

$price_description = get_field('preise_description');


?>

<div class="preise">
  <h2><?php the_title(); ?></h2>

  <div class="preise__table">
  
  <div class="table-responsive">

  <?php 
  $table = get_field( 'price_table' );

  if ( $table ) {
  
      echo '<table class="table table-striped table-dark">';
  
          if ( $table['header'] ) {
  
              echo '<thead>';
  
                  echo '<tr>';
  
                      foreach ( $table['header'] as $th ) {
  
                          echo '<th scope="col">';
                              echo $th['c'];
                          echo '</th>';
                      }
  
                  echo '</tr>';
  
              echo '</thead>';
          }
  
          echo '<tbody>';
  
              foreach ( $table['body'] as $tr ) {
  
                  echo '<tr>';
  
                      foreach ( $tr as $td ) {
  
                          echo '<td>';
                              echo $td['c'];
                          echo '</td>';
                      }
  
                  echo '</tr>';
              }
  
          echo '</tbody>';
  
      echo '</table>';
  } 
  ?>
  </div>
  </div>

  <div class="preise__description">
    <?php echo $price_description; ?>
  </div>
</div>