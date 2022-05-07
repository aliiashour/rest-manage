<?php 
    // $ar='yes' ; 
    $pageTitle='category' ; 
    include 'init.php' ; 
?>


    <div class="row">
        <h2>
            <?php echo ucfirst(getValue("category")) ; ?>
        </h2>
    </div>   


<?php
    include $template . 'footer.php' ; 
?>