/**
 * Ajax request to access an array from JS file.
 * @author Isa Ozsoy
 * @license M.I.T
 */

// Options
let options = {
    method : "GET",
    dataType: "json",
    success: function (result){
        console.log(result);
    }
}; //

// url
let url = "CON/db_read.php"; // Tested

// Document ready and eventlistener
$(function() {
    $('#click_me').on(
        'click',
        ()=> {
            $.ajax(url,options);
        }
    )
}); // Tested