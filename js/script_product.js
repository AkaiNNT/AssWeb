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

function deleteProduct(product_id) {
    var x = confirm('Are you sure?');
    if (x == true) {
        $.post(
            'ajax/deleteProduct.php',
            {
                product_id: product_id
            },
            function(data, status) {
                showProduct();
            }
        );
    }
}

function editProduct(product_id) {
    $('#product_id_to_edit').val(product_id);
    $.post(
        'ajax/editProduct.php',
        {
            product_id: product_id
        },
        function (data, status) {
            var product = JSON.parse(data);
            $("#edit_product_name").val(product.Name);
            $("#edit_product_price").val(product.Price);
            $("#edit_product_class").val(product.Class);
            $("#edit_product_type").val(product.Type);
            $("#edit_product_description").val(product.Description);
        }
    );
    $("#modal-edit-product").modal("show");
}

function saveEditProduct() {
    var productID = $('#product_id_to_edit').val();
    var edit_product_name = $("#edit_product_name").val();
    var edit_product_type = $("#edit_product_type").val();
    var edit_product_price = $("#edit_product_price").val();
    var edit_product_class = $("#edit_product_class").val();
    var edit_product_description = $("#edit_product_description").val();
  
    $.post(
        'ajax/saveEditProduct.php',
        {
            productID: productID,
            edit_product_name: edit_product_name,
            edit_product_type: edit_product_type,
            edit_product_price: edit_product_price,
            edit_product_class: edit_product_class,
            edit_product_description: edit_product_description
        },
        function (data, status) {
            $("#modal-edit-product").modal("hide");
            showProduct();
        });
}


$(document).ready(function() {
    showProduct();
});