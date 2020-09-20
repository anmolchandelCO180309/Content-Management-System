<?php
    include('../../partials/admin/adminHeader.php');
    $subject_id = $_GET['subject_id'];
?>

<div class="pageHeading">CREATE NEW PAGE</div>
<form method="POST" action="../../routes/page/addPage.php">


    <input type="hidden" value="<?php echo $subject_id; ?>" name="subject_id" >

    <table class="formTable">
            <tr>
                <td>
                    <label>PAGE NAME</label>
                </td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>
                <label>POSITION</label>
                </td>
                <td>
                    <select class="selectBox" name="position" required>
                        <option value=''>Select Position</option>
                        <?php
                            $count = findNumberOfPagesInSubject($subject_id);  
                            $i = 1;
                            while($i<=$count+1){
                        ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php
                                $i++;
                            }
                        ?>
                    </select>
                </td>
            </tr>  
            <tr>
                <td>
                    <label>VISIBILITY</label>
                </td>
                <td>
                <label>TRUE</label><input type="radio" name="visible" value="1" required>
                <label>FALSE</label><input type="radio" name="visible" value="0" required> 
                </td>
            </tr> 
            <tr>
                <td>
                    <label>CONTENT</label>
                </td> 
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="content" required></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="functionalBtn" type="submit" value="CREATE" name="submit">
                </td>
            </tr>    
        </table>
                    

</form>



<?php
    include('../../partials/admin/adminFooter.php');
?>