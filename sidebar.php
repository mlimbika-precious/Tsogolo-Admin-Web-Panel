<!-- Sidebar -->
<div class="sidebar" id="mySidebar" style="background-color: orange;">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px; font-size: 16px;">Admin</h5>
</div>

<hr style="border:1px solid; background-color:orange; border-color:white;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
    <a href="./index.php" style="font-size: smaller;"><i class="fa fa-home"></i> Dashboard</a>
    <a href="" style="font-size: smaller;" onclick="toggleSubcategory(event, 'addPersonalityQuestionsSubcategory')"><i class="fa fa-question"></i>Personality Questions</a>
<div id="addPersonalityQuestionsSubcategory" style="display: none;">
    <a href="AddPersonalityQuestions.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i> Add Questions</a>
    <a href="personalityQuestionsList.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i> Questions List</a>
</div>
<a href="" style="font-size: smaller;" onclick="toggleSubcategory(event, 'personalityQuestionsListSubcategory')"><i class="fas fa-briefcase"></i>Careers</a>
<div id="personalityQuestionsListSubcategory" style="display: none;">
    <a href="Subcategory3.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i> Add Career</a>
    <a href="Subcategory4.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i> Careers List</a>
</div>
<a href="" style="font-size: smaller;" onclick="toggleSubcategory(event, 'addRoleModelSubcategory')"><i class="fa fa-th"></i>Role Models</a>
<div id="addRoleModelSubcategory" style="display: none;">
    <a href="AddRoleModels.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i>Add Role Model</a>
    <a href="RoleModelsList.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i> Role Models List</a>
</div>
<a href="" style="font-size: smaller;" onclick="toggleSubcategory(event, 'roleModelsListSubcategory')"><i class="fa fa-th-list"></i>G</a>
<div id="roleModelsListSubcategory" style="display: none;">
    <a href="Subcategory7.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i> Subcategory 7</a>
    <a href="Subcategory8.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i> Subcategory 8</a>
</div>
<a href="" style="font-size: smaller;" onclick="toggleSubcategory(event, 'aboutDevelopersSubcategory')"><i class="fas fa-info"></i> About</a>
<div id="aboutDevelopersSubcategory" style="display: none;">
    <a href="AboutDevelopers.php" style="font-size: smaller;"><i class="fa fa-angle-right"></i>Developers</a>
   
</div>


</div>
 
<script>
function toggleSubcategory(event, subcategoryId) {
  event.preventDefault();
  var subcategory = document.getElementById(subcategoryId);
  if (subcategory.style.display === "none") {
    subcategory.style.display = "block";
  } else {
    subcategory.style.display = "none";
  }
}
</script>

    
  
  <!---->


