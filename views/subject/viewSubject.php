<?php 
    include('../../partials/admin/adminHeader.php');
    include('../../routes/subject/subjectData.php');     
?>    
    <div class="pageHeading">MANAGE SUBJECT</div>
    <div class="pageContent">
        <h2>MENU NAME:<span class="pageLinks"> <?php echo $data['name']; ?></span></h2>
        <h2>MENU POSITION:<span class="pageLinks"> <?php echo $data['position']; ?></span></h2>
        <h2>VISIBILITY:<span class="pageLinks"> <?php echo $data['visibility']; ?></span></h2>    
        <br>    
        <div>
            <a class="functionalBtn" href="editSubject.php?sub_id=<?php echo $data['id']; ?>">EDIT</a>
            <a class="functionalBtn" onclick="document.getElementById('checkDelete').style.display='block'">DELETE</a>
        </div>    
    </div>
    <br>
    <hr>

    <div class="pageHeading">
        PAGES IN THIS SUBJECT
    </div>
    <div class="pageContent">
        <?php
            while($data1 = mysqli_fetch_assoc($run1)){          
        ?>
                <div>
                    <a class="pageLinks"  href="../page/viewPage.php?page_id=<?php echo $data1['id'];?>&subject_id=<?php echo $data['id'];?>">
                        >> <?php echo $data1['menu_name']; ?>
                    </a>
                </div><br>
        <?php
            }
        ?><br>
        
        <a class="functionalBtn" href="../page/addPage.php?subject_id=<?php echo $data['id']; ?>">+ADD PAGE</a>
    </div>


    <div id="checkDelete" class="modal">
        <span onclick="document.getElementById('checkDelete').style.display='none'" class="close" title="Close Modal">×</span>
        
        <div class="container">
            <h1>Delete Page</h1>
            <h2>Are you sure you want to delete your <u><?php echo $data['name']; ?></u></h3>
            <button type="button" onclick="document.getElementById('checkDelete').style.display='none'" class="functionalBtn">Cancel</button>
            <button onclick="location.href='../../routes/subject/deleteSubject.php?sub_id=<?php echo $data['id']; ?>'" class="functionalBtn">Delete</button>
        </div>
    </div>

<?php
    include('../../partials/admin/adminFooter.php');
?>
