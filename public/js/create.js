var education = 1;
var experience = 1;
var project = 1;
function add_educations(e) {  
  e.preventDefault(); 
  var xo = $("#education").append("<div class='education_row'>" + $(".education_row").html() +
    "<a class='btn btn-lg btn-success' style='cursor: pointer;' onclick='add_educations(event, this)'>Add more</a>" +
    "<a class='btn btn-lg btn-danger' style='cursor: pointer;' onclick='remove_education(event, this)'>X</a>" +
  "</div>");
  education++;
  xo.children().last().children().first().find("input").focus();
}
function add_experiences(e) {  
  e.preventDefault(); 
  var xo = $("#experience").append("<div class='experience_row'>" + $(".experience_row").html() +
    "<a class='btn btn-lg btn-success' style='cursor: pointer;' onclick='add_experiences(event, this)'>Add more</a>" +
    "<a class='btn btn-lg btn-danger' style='cursor: pointer;' onclick='remove_experience(event, this)'>X</a>" +
  "</div>");
  experience++;
  xo.children().last().children().first().find("input").focus();
}
function add_projects(e) {  
  e.preventDefault(); 
  var xo = $("#project").append("<div class='project_row'>" + $(".project_row").html() +
    "<a class='btn btn-lg btn-success' style='cursor: pointer;' onclick='add_projects(event, this)'>Add more</a>" +
    "<a class='btn btn-lg btn-danger' style='cursor: pointer;' onclick='remove_project(event, this)'>X</a>" +
  "</div>");
  project++;
  xo.children().last().children().first().find("input").focus();
}


function remove_education(e, ele)
{
  if (education > 1) {
    var row = $(ele).parent();
    education--;
    $(row).remove();
      
  }
}
function remove_experience(e, ele)
{
  if (experience > 1) {
    var row = $(ele).parent();
    experience--;
    $(row).remove();
      
  }
}
function remove_project(e, ele)
{
  if (project > 1) {
    var row = $(ele).parent();
    project--;
    $(row).remove();
      
  }
}

