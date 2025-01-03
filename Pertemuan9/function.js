/**
 * membuat fungsi menghitung luas lingkaran
 * fungsi dibuat dengan gaya function declaration
 * @param {number} radius (jari-jari)
 * @return {number} area (luas lingkaran)
 */

function calAreaOfCircle(radius) {
    const phi = 3.14;
    const area = phi * radius * radius;
    return area;
}
// memanggil fungsi dengan mengirimkan parameter
console.log(calAreaOfCircle(1));
console.log(calAreaOfCircle(2));

/**
 * membuat fungsi menghitung luas lingkaran
 * fungsi dibuat dengan gaya function expression
 * @param {number} radius (jari-jari)
 * @return {number} area (luas lingkaran)
 */

const calAreaOfCir = function (radius) {
    const phi = 3.14;
    const area = phi * radius * radius;
    return area;
}
// memanggil fungsi dengan mengirimkan parameter
console.log(calAreaOfCir(3));
console.log(calAreaOfCir(4));


/**
 * membuat fungsi menghitung luas lingkaran
 * fungsi dibuat dengan gaya arrow function
 * @param {number} radius (jari-jari)
 * @return {number} area (luas lingkaran)
 */

const calAreaCircle = (radius) => {
    const phi = 3.14;
    const area = phi * radius * radius;
    return area;
}

// memanggil fungsi dengan mengirimkan parameter
console.log(calAreaOfCircle(5));
console.log(calAreaOfCircle(6));

/**
 * membuat fungsi menghitung luas lingkaran
 * fungsi dibuat dengan gaya arrow function
 * @param {number} radius (jari-jari)
 * @return {number} area (luas lingkaran)
 */

const calcAreaCircle = (radius) => 3.14 * radius * radius;

// memanggil fungsi dengan mengirimkan parameter
console.log(calcAreaCircle(7));
console.log(calcAreaCircle(8));