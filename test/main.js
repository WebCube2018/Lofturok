function someFunc(){
    var Number1 = document.getElementById("number1").value;
    var Number2 = document.getElementById("number2").value;
    var Result  = +Number1 + +Number2;
    document.getElementById('result').innerHTML = '<b>'+Result+'</b>';
}
