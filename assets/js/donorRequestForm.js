function checkAnswer(){
    var q34 = document.forms['donorRequestForm']['question34'];
    var q37 = document.forms['donorRequestForm']['question37'];

    if(q34.value == '' & q37.value == ''){
        q34.value = 'NO ANSWER';
        q37.value = 'NO ANSWER';
    }
}