<?php 
    include('../../partials/admin/adminHeader.php');
    include('../../routes/subject/subjectData.php'); 
?>

<div class="pageHeading">MANAGE SUBJECT</div>

<form method="POST" action="../../routes/subject/editSubjectData.php">
        <table class="formTable">
            <tr>
                <td>
                    <label>SUBJECT NAME</label>
                </td>
                <td>
                    <input type="text" name="name" value="<?php echo $data['name'] ?>" required>
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
                            $count = findNumberOfSubjects();  
                            $i = 1;
                            while($i<=$count){
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
                <label>TRUE</label><input type="radio" name="visibility" value="1"  required>
                <label>FALSE</label><input type="radio" name="visibility" value="0"  required> 
                </td>
            </tr>  
            <tr>
                <td colspan="2">
                    <input type="hidden" value="<?php echo $data['id']; ?>" name="id"  required>
                    <input type="submit" class="functionalBtn" value="EDIT" name="submit">
                </td>
            </tr>         
        </table>   
</form>

<?php
    include('../../partials/admin/adminFooter.php');
?>
