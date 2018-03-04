var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', "lang.json");
ourRequest.onload = function() {
  var ourData = JSON.parse(ourRequest.responseText);
  renderHTML(ourData);
};
ourRequest.send();
 function renderHTML(data) {

for(var i = 0; i < data.length; i++) {
    var sum = 0;
    var lange = data[i].language;
    var code = data[i].countrycode;
    var speak =  data[i].speakers;

    if(lange == "Danish"){
      for(var ii = 0; ii < 2; ii++){
      sum = parseInt(speak) + sum;
      console.log(sum);
}
    }

}
    // var sum = "";
    // for(var i = 0; i < data.length; i++){
    //   var x = data[i].countrycode;
    //
    //   if(data[i].countrycode === x){
    //     var y = data[i].speakers;
    //     function getSum(total, num) {
    //       return total + num;
    //     }
    //
    //
    //   //   for(var ii = 0; ii < y.length; ii++){
    //   //      var sum =   y.reduce(getSum);
    //   //   }
    //   }
    //
    //
    //     console.log(y);
    //   }

  }
