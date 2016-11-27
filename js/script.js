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
    var user_name = $('#user_name').val();
    var user_email = $('#user_email').val();
    var user_password = $('#user_password').val();
    var user_address = $('#user_address').val();
    var user_fullname = $('#user_fullname').val();

    $.post(
        'ajax/addUser.php',
        {
            user_name: user_name,
            user_email: user_email,
            user_password: user_password,
            user_address: user_address,
            user_fullname: user_fullname
        },
        function(data, status) {
            $('#modal-add-user').modal('hide');

            showUser();

            $('#user_name').val('');
            $('#user_email').val('');
            $('#user_password').val('');
            $('#user_address').val('');
            $('#user_fullname').val('');

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
            $("#edit_user_name").val(user.Username);
            $("#edit_user_email").val(user.Email);
            $("#edit_user_password").val(user.Password);
            $("#edit_user_fullname").val(user.FullName);
            $("#edit_user_address").val(user.Address);
        }
    );
    $("#modal-edit-car").modal("show");
}

function saveEditUser() {
    var userID = $('#user_id_to_edit').val();
    var edit_user_name = $("#edit_user_name").val();
    var edit_user_email = $("#edit_user_email").val();
    var edit_user_address = $("#edit_user_address").val();
    var edit_user_fullname = $("#edit_user_fullname").val();
    var edit_user_password = $("#edit_user_password").val();
  
    $.post(
        'ajax/saveEditUser.php',
        {
            userID: userID,
            edit_user_name: edit_user_name,
            edit_user_email: edit_user_email,
            edit_user_fullname: edit_user_fullname,
            edit_user_password: edit_user_password,
            edit_user_address: edit_user_address
        },
        function (data, status) {
            $("#modal-edit-car").modal("hide");
            showUser();
        });
}


$(document).ready(function() {
    showUser();
});