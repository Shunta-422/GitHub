function OutputData(){
  //ポスト用の連想配列を用意
  //let postData = {};
  //postData["proc"]       = "setdata";
  $.ajax({
    url: "dbAjax.php",
    type: "POST",
    // data: postData,
    dataType: "json",
  })
    .done(function (data) {
      let data_stringify = JSON.stringify(data);
      let data_json = JSON.parse(data_stringify);

      $('#text1').val(data_json['string']);
      $('#text2').val(data_json['string']);
      $('#text3').val(data_json['string']);
      $('#text4').val(data_json['string']);
      $('#text5').val(data_json['string']);
    })
    .fail(function (data) {
      alert("接続エラー");
    });
}


function ClearInputInfo(){
  $("#checkbox1").prop('checked', false);
  $("#checkbox2").prop('checked', false);
  $("#checkbox3").prop('checked', false);
  $("#checkbox4").prop('checked', false);
  $("#checkbox5").prop('checked', false);

  $("#text1").val('');
  $("#text2").val('');
  $("#text3").val('');
  $("#text4").val('');
  $("#text5").val('');
}
