<?php
    include('../../partials/admin/adminHeader.php');    
    include('../../routes/page/pageData.php');
    
?>

  
   
<div class="pageHeading">MANAGE PAGE</div>

                
        <table class="formTable">
            <tr>
                <td>
                    <label>MENU NAME:</label>
                </td>
                <td>
                <?php echo $data['menu_name']; ?>
                </td>
            </tr>
            <tr>
                <td>
                <label>POSITION:</label>
                </td>
                <td>
                    <?php echo $data['position']; ?>
                </td>
            </tr>  
            <tr>
                <td>
                    <label>VISIBILITY:</label>
                </td>
                <td>
                    <?php echo $data['visible']; ?>
                </td>
            </tr> 
            <tr>
                <td>
                    <label>CONTENT</label>
                </td> 
            </tr>
            <tr>
                <td colspan="2">
                    <textarea readonly><?php echo $data['content']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <a class="functionalBtn" href="editPage.php?page_id=<?php echo $page_id;?>&subject_id=<?php echo $subject_id;?>">EDIT</a>
                    <a class="functionalBtn" onclick="document.getElementById('checkDelete').style.display='block'">DELETE</a>    
                </td>
            </tr>    
        </table>


<div id="checkDelete" class="modal">
    <span onclick="document.getElementById('checkDelete').style.display='none'" class="close" title="Close Modal">×</span>
    
    <div class="container">
      <h1>Delete Page</h1>
      <h2>Are you sure you want to delete your <u><?php echo $data['menu_name']; ?></u></h3>
      <button type="button" onclick="document.getElementById('checkDelete').style.display='none'" class="functionalBtn">Cancel</button>
      <button onclick="location.href='../../routes/page/deletePage.php?page_id=<?php echo $page_id; ?>'" class="functionalBtn">Delete</button>
    </div>
</div>

<?php
    include('../../partials/admin/adminFooter.php');
?>