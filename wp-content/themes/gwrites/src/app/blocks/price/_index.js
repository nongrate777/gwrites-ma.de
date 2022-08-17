export function calculator() {
    const calculator = document.querySelector('.calculator');
    if (!calculator) {
        return;
    }

    calculator.addEventListener('click', () => {
        let number = 60;

        // -5%
        let discount1 = 0;
        const param1 = document.getElementById('price-params-1');
        const param2 = document.getElementById('price-params-2');
        const param3 = document.getElementById('price-params-3');
        if (param1.checked === true || param2.checked === true || param3.checked === true) {
            discount1 = Math.round(number * 5 / 100);
        }

        // -10%
        let discount2 = 0;
        const param4 = document.getElementById('price-params-4');
        if (param4.checked === true) {
            discount2 = Math.round(number * 10 / 100);
        }

        // +20%
        let increase = 0;
        const param6 = document.getElementById('calculator-form-urgency');
        if (param6.value === 'Eilig') {
            increase = Math.round(number * 20 / 100);
        }

        let sum = number - discount1 - discount2 + increase;

        document.getElementById('price-total').innerHTML = sum;
        calculator.querySelector('input[name="total"]').value = sum;
    });
}