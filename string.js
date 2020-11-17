function validate() {
    let inp = document.getElementById('val').value;
    if(isNaN(inp)) {
        findVowel(inp);
    }
    else {
        findReverse(inp);
    }
}

function findVowel(inp) {
    let str = inp.toLowerCase();
    let pos = 0, ch = "";
    for(let i = 0; i < str.length; i++) {
        ch = str.charAt(i);
        if(ch == 'a' || ch == 'e' || ch == 'i' || ch == 'o' || ch == 'u') {
            pos = i + 1;
            break;
        }
    }
    if(pos == 0) {
        alert("Vowel not found");
    }
    else {
        alert("Position of left most vowel in the string : " + pos);
    }
}

function findReverse(inp) {
    let num = parseInt(inp);
    let temp = num;
    let rem = 0, rev = 0;
    while(num > 0) {
        rem = num % 10;
        rev = rev * 10 + rem;
        num = parseInt(num / 10);
    }
    alert("Number : " + temp + "\nReverse Order : "+rev);
}