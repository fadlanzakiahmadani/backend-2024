const nilai = 90;
let grade = "";

if (nilai > 89) {
    grade = "A";
} else if (nilai > 79){
    grade = "B";
} else {
    grade = "C";
}

console.log (`Nilai anda: ${grade}`);