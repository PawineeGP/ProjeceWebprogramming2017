// $(document).ready(function(){
//   $('.option').click(function(){
//     var total=0;
//     $('.option:checked').each(function(){
//       total += parseInt($(this).val());
//       $(this).parent();
//     });
//     $('.option:not(:checked)').each(function(){
//       $(this).parent();
//     })
//     $('#total').html(''+total);
//   })
// });
function cal($total){
 var weight = document.getElementById("weight").value;
 var height = document.getElementById("height").value;
 var age = document.getElementById("age").value;
 var activity = document.getElementById("activity").value;
 var sex = document.getElementById("sex").value;
 var intweight = parseInt(weight);
 var intheight = parseInt(height);
 var intage = parseInt(age);
 var intactivity = parseFloat(activity);

 if(weight ==""){
    alert('กรุณากรอกน้ำหนัก');
 } else if(height ==""){
  alert('กรุณากรอกส่วนสูง');
 }else if(age == ""){
    alert('กรุณากรอกอายุ');
 }else{
   if(sex=="ชาย"){
      var BMR = 66+(13.7*intweight)+(5*intheight)-(6.8*intage);
      var ans = (intactivity*BMR);
      var cell = Math.ceil(ans);
      document.getElementById("result").value = cell;

   }else if(sex=="หญิง"){
      var BMR = 665+(9.6*intweight)+(1.8*intheight)-(4.7*intage);
      var ans = (intactivity*BMR);
      var cell = Math.ceil(ans);
      document.getElementById("result").value = cell;
   }
 }
}
<!-- /scriptfoodcal -->

function total(){
$(document).ready(function(){
  $('.option').click(function(){
    var total=0;
    $('.option:checked').each(function(){
      total += parseInt($(this).val());
      $(this).parent();
    });
    $('.option:not(:checked)').each(function(){
      $(this).parent();
    })
    $('#total').html(''+total);
  })
});
}
