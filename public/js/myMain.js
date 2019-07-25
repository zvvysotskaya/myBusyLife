$(function(){

    //Grocery Page!!!!!!!!!!!!!!!!!!!!!!!!!!
  $('input:checkbox[class=grocery]').change(function(){
    var b = $(' input:checkbox[class=grocery]').index(this);//find an index of the checked checkbox
    var maxChildren2 = $('.grocery1').children().length;
    var maxCheckboxes2 = maxChildren2 / 4; // 4 is the count of all columns in the table
    var childNum2 = (b * 4)+4;//the number of the last child selected the row
    //the row of the selected children
    var dd4 = $('.grocery1 td')[(childNum2) - 1];
    var dd5 = $('.grocery1 td')[(childNum2) - 2];
    var dd6 = $('.grocery1 td')[(childNum2) - 3];

  if( $(this).prop('checked')){
      $('.grocery1').find(dd4).css({'background-color':'red', 'color':'white'});
      $('.grocery1').find(dd5).css({'background-color':'red', 'color':'white'});
      $('.grocery1').find(dd6).css({'background-color':'red', 'color':'white'});

      }else{
      $('.grocery1').find(dd4).attr('style','color:black');
      $('.grocery1').find(dd5).attr('style','color:black');
      $('.grocery1').find(dd6).attr('style','color:black');
    }
  }).change();

  //Clothes Page!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  $('input:checkbox[class=clothes]').change(function(){
    var a = $('input:checkbox[class=clothes]').index(this);//find an index of the checked checkbox
    var maxChildren = $('.clothes1').children().length;
    var maxCheckboxes = maxChildren / 4; // 4 is the count of all columns in the table
    var childNum =(a * 4) + 4;//the number of the last child selected the row
    //the row of the selected children
    var dd1 = $('.clothes1 td')[(childNum) - 1];
    var dd2 = $('.clothes1 td')[(childNum) - 2];
    var dd3 = $('.clothes1 td')[(childNum) - 3];

  if( $(this).prop('checked')){
      $('.clothes1').find(dd1).css({'background-color':'pink', 'color':'blue'});
      $('.clothes1').find(dd2).css({'background-color':'pink', 'color':'blue'});
      $('.clothes1').find(dd3).css({'background-color':'pink', 'color':'blue'});

      }else{
      $('.clothes1').find(dd1).attr('style','color:black');
      $('.clothes1').find(dd2).attr('style','color:black');
      $('.clothes1').find(dd3).attr('style','color:black');
    }
  }).change();

  //Household items Page!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$('input:checkbox[class=household]').change(function(){
  var c = $('input:checkbox[class=household]').index(this);//find an index of the checked checkbox
  var maxChildren3 = $('.household1').children().length;
  var maxCheckboxes3 = maxChildren3 / 4; // 4 is the count of all columns in the table
  var childNum3 = (c * 4) + 4;//the number of the last child selected the row
  //the row of the selected children
  var dd7 = $('.household1 td')[(childNum3) - 1];
  var dd8 = $('.household1 td')[(childNum3) - 2];
  var dd9 = $('.household1 td')[(childNum3) - 3];

if( $(this).prop('checked')){
    $('.household1').find(dd7).css({'background-color':'green', 'color':'white'});
    $('.household1').find(dd8).css({'background-color':'green', 'color':'white'});
    $('.household1').find(dd9).css({'background-color':'green', 'color':'white'});
    alert('maxChildren clothes '+ maxChildren3 +' max boxes '+ maxCheckboxes3 +' box index/number '+c);
    }else{
    $('.household1').find(dd7).attr('style','color:black');
    $('.household1').find(dd8).attr('style','color:black');
    $('.household1').find(dd9).attr('style','color:black');
  }
}).change();

});
