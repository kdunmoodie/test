// // funciones de ejemplo inicio
//
//
// function ejemplo() {
//   var myBox1 = document.getElementById('box1').value;
//   var myBox2 = document.getElementById('box2').value;
//   var result = document.getElementById('result');
//   var myResult = myBox1 * myBox2;
//   result.value = myResult;
// }
// <table width="80%" border="0">
//   <tr>
//     <th>Box 1</th>
//     <th>Box 2</th>
//     <th>Result</th>
//   </tr>
//   <tr>
//     <td><input id="box1" type="text" oninput="calculate()" /></td>
//     <td><input id="box2" type="text" oninput="calculate()" /></td>
//     <td><input id="result" /></td>
//   </tr>
//   <tr>
//     <td>&nbsp;</td>
//     <td>&nbsp;</td>
//     <td>&nbsp;</td>
//   </tr>
// </table>
//
// // funciones de ejemplo fin


// var m1 = document.getElementById("sectCant1").value;
// var m2 = 4;

//sandbox
// $(document).ready(function(e){
//   $("input").change(function(){
//     var x = 0;
//     $("input[name=%%%%]").each(function(){
//       toplam = toplam + parseInt($(this).val());
//     })
//     $("input[name=]").val(toplam);
//   });
// });
// sandbox-end








 function c() {
   var m = +document.getElementById("sectCant1").value;
   // window.alert(m + 6);
   var o = +document.getElementById("PreciodeCant1").value;
   var x = (m * 10.00);
   document.getElementById("TotalPreciodeCant1").innerHTML = "$" + x.toFixed(2);

 }
