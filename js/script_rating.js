function showRating() {
    $.post(
        'ajax/showRating.php',
        {},
        function(data) {
            $('#ratingTable').html(data);
        }
    );
}

function addRating() {
    var user_id = $('#user_id').val();
    var product_id = $('#user_product').val();
    var star = $('#star').val();

    $.post(
        'ajax/addRating.php',
        {
            user_id: user_id,
            product_id: product_id,
            star: star
        },
        function(data, status) {
            $('#modal-add-user').modal('hide');

            showRating();

            $('#user_id').val('');
            $('#product_id').val('');
            $('#star').val('');

        }
    )
}

// function deleteUser(user_id) {
//     var x = confirm('Are you sure?');
//     if (x == true) {
//         $.post(
//             'ajax/deleteUser.php',
//             {
//                 user_id: user_id
//             },
//             function(data, status) {
//                 showUser();
//             }
//         );
//     }
// }

// function editUser(user_id) {
//     $('#user_id_to_edit').val(user_id);
//     $.post(
//         'ajax/editUser.php',
//         {
//             user_id: user_id
//         },
//         function (data, status) {
//             var user = JSON.parse(data);
            
//             $("#edit_user_id").val(user.ID);
//             $("#edit_user_name").val(user.Username);
//             $("#edit_user_email").val(user.Email);
//             $("#edit_user_fullname").val(user.FullName);
//         }
//     );
//     $("#modal-edit-car").modal("show");
// }

// function saveEditCar() {
//     var carID = $('#car_id_to_edit').val();
//     var edit_car_id = $("#edit_car_id").val();
//     var edit_car_name = $("#edit_car_name").val();
//     var edit_car_year = $("#edit_car_year").val();
  
//     $.post(
//         'ajax/saveEditCar.php',
//         {
//             carID: carID,
//             edit_car_id: edit_car_id,
//             edit_car_name: edit_car_name,
//             edit_car_year: edit_car_year
//         },
//         function (data, status) {
//             $("#modal-edit-car").modal("hide");
//             showUser();
//         });
// }


$(document).ready(function() {
    showRating();
});