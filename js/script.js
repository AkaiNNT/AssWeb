function showUser() {
    $.post(
        'ajax/showUser.php',
        {},
        function(data) {
            $('#carTable').html(data);
        }
    );
}

function addUser() {
    var user_id = $('#user_id').val();
    var user_name = $('#user_name').val();
    var user_email = $('#user_email').val();
    var user_password = $('#user_password').val();

    $.post(
        'ajax/addUser.php',
        {
            user_id: user_id,
            user_name: user_name,
            user_email: user_email,
            user_password: user_password
        },
        function(data, status) {
            $('#modal-add-user').modal('hide');

            showUser();

            $('#user_id').val('');
            $('#user_name').val('');
            $('#user_email').val('');
            $('#user_password').val('');

        }
    )
}

function deleteUser(user_id) {
    var x = confirm('Are you sure?');
    if (x == true) {
        $.post(
            'ajax/deleteUser.php',
            {
                user_id: user_id
            },
            function(data, status) {
                showUser();
            }
        );
    }
}

function editUser(user_id) {
    $('#user_id_to_edit').val(user_id);
    $.post(
        'ajax/editUser.php',
        {
            user_id: user_id
        },
        function (data, status) {
            var user = JSON.parse(data);
            
            $("#edit_user_id").val(user.ID);
            $("#edit_user_name").val(user.Username);
            $("#edit_user_email").val(user.Email);
            $("#edit_user_fullname").val(user.FullName);
        }
    );
    $("#modal-edit-car").modal("show");
}

function saveEditCar() {
    var carID = $('#car_id_to_edit').val();
    var edit_car_id = $("#edit_car_id").val();
    var edit_car_name = $("#edit_car_name").val();
    var edit_car_year = $("#edit_car_year").val();
  
    $.post(
        'ajax/saveEditCar.php',
        {
            carID: carID,
            edit_car_id: edit_car_id,
            edit_car_name: edit_car_name,
            edit_car_year: edit_car_year
        },
        function (data, status) {
            $("#modal-edit-car").modal("hide");
            showUser();
        });
}


$(document).ready(function() {
    showUser();
});