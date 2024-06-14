function calculate() {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);

    if(isNaN(num1) || isNaN(num2)){
        alert('Please enter valid numbers.');
        return;
    }

    const sum = num1 + num2;
    const difference = num1 - num2;
    const product = num1 * num2;
    const quotient = num1 / num2;

    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
        <p>Sum: ${sum}</p>
        <p>Difference: ${difference}</p>
        <p>Product: ${product}</p>
        <p>Quotient: ${quotient}</p>
    `;
}

function leapYear(){
    const year = parseInt(document.getElementById('year').value);
    
    if(isNaN(year)){
        alert('Please enter valid year');
        return;
    }
    
    var resultDiv2 = document.getElementById('result2');
    if((year%4==0 && year % 100 !=0 ) || year %400 == 0){
        resultDiv2.innerHTML = "<p>Number of days in Febuary: 29</P>";
    } else{
        resultDiv2.innerHTML = "<p>Number of days in Febuary: 28</P>";

    }
}
