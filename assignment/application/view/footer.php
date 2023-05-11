<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Footer</title>
    <meta charset="UTF-8">
  </head>

  <nav class="navbar navbar-expand-sm footer">
    <div class="container">
      <div class="navbar-text float-left pt-3">
        <p>
          <!-- Copyright -->
          <span class="align-baseline"></span>&copy 2023 Mobile Web 3D Applications
          
          /
          
          <!-- Statement of originality -->
          <a type="button" data-bs-toggle="modal" data-bs-target="#statement_modal">
            Statement of Originality
          </a>
          
          /
          
          <!-- References -->
          <a type="button" data-bs-toggle="modal" data-bs-target="#reference_modal">
            References
          </a>
          
          /
          
          <!-- GitHub -->
          <a type="button" data-bs-toggle="modal" data-bs-target="#github_modal">
            GitHub Links
          </a>
        </p>
      </div>
      
      <!-- Social icons -->
      <div class="navbar-text float-right">
        <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size:20px; color:rgb(66, 110, 255);"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x" style="font-size:20px; color:rgb(0, 204, 255);"></i></a>
        <a href="#"><i class="fab fa-google-plus fa-2x" style="font-size:20px; color:rgb(255, 90, 49);"></i></a>
        <a href=<?php echo $github_links[0]["url"] ?> target="_blank"><i class="fab fa-github-square fa-2x" style="font-size:20px; color:rgb(52, 221, 0);"></i></a>
      </div>
    </div>
  </nav>
  
  <!-- Statement Modal -->
  <div class="modal fade" id="statement_modal" tabindex="-1" aria-labelledby="statement_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h1 id="statement_modal_label">Statement of Originality</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Body -->
        <div class="modal-body">
          <p><?php echo $statement_originality ?></p>
        </div>
        <!-- Close Button -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Reference Modal -->
  <div class="modal fade" id="reference_modal" tabindex="-1" aria-labelledby="reference_modal_label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h1 id="reference_modal_label">References</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Body -->
        <div class="modal-body">
          <?php for ($i = 0; $i < count($references); $i++) { ?>
            <p><?php echo $references[$i]["text"] . "<a href='" . $references[$i]["url"] . "' target='_blank'>" . $references[$i]["url"] . "</a>" ?></p>
            <br>
            <?php } ?>
          </div>
          <!-- Close Button -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- GitHub Links Modal -->
    <div class="modal fade" id="github_modal" tabindex="-1" aria-labelledby="github_modal_label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h1 id="github_modal_label">GitHub Links</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- Body -->
          <div class="modal-body">
            <?php for ($i = 0; $i < count($github_links); $i++) { ?>
              <p><?php echo $github_links[$i]["text"] . "<a href='" . $github_links[$i]["url"] . "' target='_blank'>" . $github_links[$i]["url"] . "</a>" ?></p>
              <br>
              <?php } ?>
            </div>
            <!-- Close Button -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</html>
    