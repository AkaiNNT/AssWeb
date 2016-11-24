function showProduct() {
    $.post(
        'ajax/showProduct.php',
        {},
        function(data) {
            $('#productTable').html(data);
        }
    );
}

function addProduct() {
    var product_id = $('#product_id').val();
    var product_name = $('#product_name').val();
    var product_price = $('#product_price').val();
    var product_type = $('#product_type').val();
    var product_class = $('#product_class').val();
    var product_description = $('#product_description').val();

    $.post(
        'ajax/addProduct.php',
        {
            product_id: product_id,
            product_name: product_name,
            product_price: product_price,
            product_type: product_type,
            product_class: product_class,
            product_description: product_description
        },
        function(data, status) {
            $('#modal-add-product').modal('hide');

            showProduct();

            $('#product_id').val('');
            $('#product_name').val('');
            $('#product_price').val('');
            $('#product_class').val('');
            $('#product_type').val('');
            $('#product_description').val('');
        }
    )
}

function deleteProduct(user_id) {
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

function editProduct(user_id) {
    $('#user_id_to_edit').val(user_id);
    $.post(
        'ajax/editProduct.php',
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
    $("#modal-edit-product").modal("show");
}

function saveEditProduct() {
    var carID = $('#car_id_to_edit').val();
    var edit_car_id = $("#edit_car_id").val();
    var edit_car_name = $("#edit_car_name").val();
    var edit_car_year = $("#edit_car_year").val();
  
    $.post(
        'ajax/saveEditProduct.php',
        {
            carID: carID,
            edit_car_id: edit_car_id,
            edit_car_name: edit_car_name,
            edit_car_year: edit_car_year
        },
        function (data, status) {
            $("#modal-edit-car").modal("hide");
            showProduct();
        });
}


$(document).ready(function() {
    showProduct();
});