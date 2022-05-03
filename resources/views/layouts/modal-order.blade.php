<!-- Modal Order -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Заказать звонок</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <script type="text/javascript">
          $(document).ready(function(){
            $("#orderSend").click(function(){
              $('#oderErrorShow').hide();
              var yourName = $("#yourName").val ();
              var yourNumber = $("#yourNumber").val ();
              var adr_pattern = /[0-9a-z_-]+@/i;
              var fail = "";
              if (yourName.length < 3)
                fail ="Имя не меньше трех символов";
              else if (yourName == "" || yourName == " ")
                fail ="Введите имя";
              else if (yourNumber.length < 9)
                fail ="номер должн быть с кодом";
              else if (yourName == "" || yourName == " ")
                fail ="Введите ваш номер";
              if(fail != "") {
                $('#oderErrorShow').html(fail);
                $('#oderErrorShow').show();
                return false; 
              }
              $.ajax({
              url: "newOrder.php",
              type: "POST",
              data:{'name':yourName,'number': yourNumber,},  
              dataType: "html", 
              beforeSend: function () {$("#oderErrorShow").text("Ожидание данных..."); $('#oderErrorShow').show();},  
              success: function (data) {
                $('#oderErrorShow').html("<span style='color:#009D69;'>Данные переданы</span>");
                $('#oderErrorShow').show();
                $('#orderModal').hide();
                $('.modal-backdrop').hide();
                // modal.style.display ="none"; 
                console.log(data);
                alert("Данные переданы !!!");
                }
              });   
            });
          });
        </script>

        <form method="POST" action="">
           
          <div class="mb-3">
            <label for="yourName" class="col-form-label">Введите ваше имя:</label>
            <input type="text" class="form-control" id="yourName" name="yourName" placeholder="имя..."  maxlength="13">
          </div>
          <div class="mb-3">
            <label for="yourNumber" class="col-form-label">Номер телефона:</label>
            <input type="phone" id="yourNumber" name="yourNumber" onkeyup="this.value = this.value.replace (/[^0-9+]/, '')"       
              placeholder="+998......" maxlength="13" class="form-control" id="message-text" />
          </div>
          <div id="oderErrorShow" class="text-danger"></div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-info" id="orderSend">Отправить</button>
      </div>
    </div>
  </div>
</div>