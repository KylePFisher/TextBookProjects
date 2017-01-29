/*
     Kyle Fisher
     Chapter 12, Project 2
     INFO 2900 6A
     Brown, McCune, Paschall, Rosas 
     1/28/17
*/

function init()
{
    var form = document.getElementById("registrationForm");
    form.onsubmit = validateRegister;
}

window.onload = init();

//This function dynamically adds an error message to a field via it's name attribute
function createErrorParagraph(message, fieldName)
{
    //Creating the div and textnode for the error message
    var errorParagraph = document.createElement("div");
    var errorParagraphContent = document.createTextNode(message);
            
    //Styling the error message
    errorParagraph.className= "form-control-feedback";
    errorParagraph.style.color = "#800000";
    
    //Appending error message content to error message, and adding the error to the DOM
    errorParagraph.appendChild(errorParagraphContent);
    document.forms["registrationForm"][fieldName].parentNode.appendChild(errorParagraph);
}

//Function that's called whenever the registration form is submitted
function validateRegister()
{
    //Initializing variables
    var fields = ["first", "last", "email", "password1", "password2"];
    var fieldname;
    var email = document.forms["registrationForm"]["email"].value;
    var password1 = document.forms["registrationForm"]["password1"].value;
    var password2 = document.forms["registrationForm"]["password2"].value;
    
    //Defaulting submission = true
    var successfulSubmission = true;
    
    //Getting rid of previous error messages
    var errorMessages = document.getElementsByClassName('form-control-feedback');
    while(errorMessages[0]) {
        errorMessages[0].parentNode.removeChild(errorMessages[0]);
    }
    
    //Creating email regex
    var emailRegex = /^[a-z0-9]+@[a-z0-9]+\.[a-z]+$/;
    
    //Looping through elements to find empty values
    var i, l = fields.length;
    for (i = 0; i < l; i++) 
    {
        fieldname = fields[i];
        //Resetting the red outline around a form control
        document.forms["registrationForm"][fieldname].parentNode.parentNode.className = "form-group";
        if (document.forms["registrationForm"][fieldname].value === "") 
        {
            //When an empty value is found, dynamically add an error message via a function
            createErrorParagraph("Can't be Empty", fieldname);
            //Adding the red outline to the textbox
            document.forms["registrationForm"][fieldname].parentNode.parentNode.className += " has-error has-feedback";
            //Setting preventing the submission from happening
            successfulSubmission = false;
        }
    }
    
    if (!email.match(emailRegex))
    {
        console.log('Email triggered');
        createErrorParagraph("Email must be in form: name@domain.com", "email");
        document.forms["registrationForm"]["email"].parentNode.parentNode.className += " has-error has-feedback";
        successfulSubmission = false;
    }
    
    if (password1 != password2)
    {
        console.log('Password match triggered');
        createErrorParagraph("Passwords must match", "password2");
        document.forms["registrationForm"]["password2"].parentNode.parentNode.className += " has-error has-feedback";
        successfulSubmission = false;
    }
    
    console.log("getElementById launched and about to exit");
    return successfulSubmission;
}