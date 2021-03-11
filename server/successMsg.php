<?php
session_start();
if (isset($_SESSION['success'])) : ?>
    <div class="success mt-4" >
    	<h4>
        <?php 
        	echo $_SESSION['success'];
        ?>
    	</h4>
    </div>
<?php endif ?>