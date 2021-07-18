/**
 * Ajax request to access an array from JS file.
 * @author Isa Ozsoy
 * @license M.I.T
 */

// Options
let options = {
    method : "GET",
    dataType: "json",
    success: succesfull,
    error: function (){
        console.log('No fucking data has returned');
    }
}; // Tested

// Url
let url = "CON/db_read.php"; // Tested

// Document ready and eventlistener
$(function() {
    $('#click_me').on(
        'click',
        ()=> {
            $('#click_me').hide();
            $.ajax(url,options);
        }
    )
}); // Tested

// What to do with data...
 function succesfull(data){
    let t_container = $('.t-container');
    let t_str =
        '<table>' +
        '<thead>' +
        '<th> ID </th>' +
        '<th> NAME </th>' +
        '<th> IN OFFICE </th>' +
        '</thead>' +
        '<tbody>';

    for (let i = 0; i < data.length; i++) {
        t_str +=
            '<tr>' +
            '<td>' + data[i]['id'] + '</td>' +
            '<td>' + data[i]['name'] + '</td>' +
            '<td>' + data[i]['in_office'] + '</td>' +
            '</tr>';
    }
    t_str += '</tbody>' + '</table>';
    t_container.append(t_str);


    /* CREATE A LIST
    $('.l-container').append('<ul class="u-ul"></ul>');
     let add_x = $('.u-ul');

     for (let i = 0; i < data.length; i++) {
         add_x.append('<li class="u-li">'+data[i]['id']+'</li>');
         add_x.append('<li class="u-li">'+data[i]['name']+'</li>');
         add_x.append('<li class="u-li">'+data[i]['in_office']+'</li>');

         // console.log(data[i]['name']);
     }*/
}