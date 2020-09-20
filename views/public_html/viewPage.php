<?php
    include('../../partials/public/publicHeader.php');
    include('../../routes/page/pageData.php');
?>

<div class="pageHeading"><?php echo $data['menu_name']; ?></div>
<p class="pageContent"><?php echo $data['content']; ?></p>


<?php
    include('../../partials/public/publicFooter.php'); 
?>