
<div class="modal fade in" id="CheckoutModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content" style="width: 140%">
            <div class="modal-header" style="background-color:#F05F40">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Thông Tin Thanh Toán</h4>
            </div>
            <div class="modal-body">
                <p><strong>Mã Hóa đơn:</strong><span id="mahoadon" style="color:red"> </span></p>
                <hr style="width: 70%;max-width:150px">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                        <th>Tên sản phầm</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                  </thead>
                    <tbody id="body-bill">
                    </tbody>
                </table>
                <hr style="width: 70%;max-width:150px">
                <p><strong>Tổng: </strong><span id="TongCong"></span><span> VNĐ</span></p>
            <div class="modal-footer" style="padding-left:5px;padding-right: 5px">
              <input class="btn btn-lg btn-primary btn-block btn-signin" id="buttonPayment" value="Thanh Toán" style="background-color:#F05F40">
            </div>
          </div>
        </div>
    </div>
  </div>