var x = 2;

function fileSelected() {
    var fileName = document.getElementById("resume-upload").name;
    alert(fileName);
}


function addNewExperience() {
    var container = document.getElementById("experiences");

    var outermost_div = document.createElement("div");
    outermost_div.id = "experience-" + x;

    //Experience heading
    var label = document.createElement("label");
    var bold = document.createElement("b");
    bold.appendChild(document.createTextNode("Experience " + x));
    label.appendChild(bold);
    outermost_div.appendChild(label);

    //Form row-group for place
    var form_group_row_div = document.createElement("div");
    form_group_row_div.className = "form-group row";
    outermost_div.appendChild(form_group_row_div);

    // Label "Place"
    label = document.createElement("label");
    label.appendChild(document.createTextNode("Place"));
    label.setAttribute("for", "experience-place-" + x);
    label.className = "col-sm-2 col-form-label";
    form_group_row_div.appendChild(label);

    //TextBox for place
    var col_sm_div = document.createElement("div");
    col_sm_div.className = "col-sm-10";
    var input_field = document.createElement("input");
    input_field.setAttribute("type", "text");
    input_field.className = "form-control";
    input_field.id = "place-" + x;
    col_sm_div.appendChild(input_field)
    form_group_row_div.appendChild(col_sm_div);

    //Form row-group for start and end dates
    form_group_row_div = document.createElement("div");
    form_group_row_div.className = "form-group row";
    outermost_div.appendChild(form_group_row_div);

    //Label for start date
    label = document.createElement("label");
    label.appendChild(document.createTextNode("Start Date"));
    label.setAttribute("for", "experience-start-" + x);
    label.className = "col-sm-2 col-form-label";
    form_group_row_div.appendChild(label);

    //input field for start date
    col_sm_div = document.createElement("div");
    col_sm_div.className = "col-sm-4";
    var input_field = document.createElement("input");
    input_field.setAttribute("type", "date");
    input_field.className = "form-control";
    input_field.id = "experience-start-" + x;
    col_sm_div.appendChild(input_field)
    form_group_row_div.appendChild(col_sm_div);

    //Label for end date
    label = document.createElement("label");
    label.appendChild(document.createTextNode("End Date"));
    label.setAttribute("for", "experience-end-" + x);
    label.className = "col-sm-2 col-form-label";
    form_group_row_div.appendChild(label);

    //input field for end date
    col_sm_div = document.createElement("div");
    col_sm_div.className = "col-sm-4";
    var input_field = document.createElement("input");
    input_field.setAttribute("type", "date");
    input_field.className = "form-control";
    input_field.id = "experience-end-" + x;
    col_sm_div.appendChild(input_field)
    form_group_row_div.appendChild(col_sm_div);

    container.appendChild(outermost_div);
    x++;
}
