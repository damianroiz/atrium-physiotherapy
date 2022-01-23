$(document).ready(function () {
   //Create a new annual plan function
   $("#submitEmail").click(function (event) {
    //stop submit the form, we will post it manually.
    event.preventDefault();
    // Get form
    var form = $('#myform')[0];
    // Create an FormData object 
    var data = new FormData(form);
    // If you want to add an extra field for the FormData
    // data.append("CustomField", "This is some extra data, testing");
    // disabled the submit button
    var checkFields = true;
    // ensure all fields are filled
    // jQuery('input:invalid').css('border-color', 'red');
    // jQuery('input:valid').css('border-color', 'green');

    // if ($("#myform").valid()) {
    //     checkFields = true;
    // } else {
    //     $("#outputMessage").html('<div class="alert alert-danger">Error! - Please fill out all the required fields</div>');
    //     checkFields = false;
    //     return false;

    // }

    if (checkFields) {
        $("#submitEmail").prop("disabled", true);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "ajax/sendEmail.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (data) {
                $("#outputMessage").html('<div class="alert alert-success">Success! - Your Email Has been Submitted</div>');
                // console.log("SUCCESS : ", data);
            },
            error: function (e) {
                $("#outputMessage").html('<div class="alert alert-danger">Error! - Unable to Submit your email, if this error persists please give us a call directly.</div>');
                // console.log("ERROR : ", e);
                $("#submitEmail").prop("disabled", false);
            }
        });
    }
});

});