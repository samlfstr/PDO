/**
 * Ajax request to access an array from JS file.
 * @author Isa Ozsoy
 * @license M.I.T
 */


// Options
let options = {
    method : "GET",
    dataType: "json",
    success: function (data){
        for (let i = 0; i < data.length; i++) {

            // console.log(data[i]['name']);
        }
    },
    error: function (){
        console.log('No fucking data has returned');
    }
}; // Tested

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