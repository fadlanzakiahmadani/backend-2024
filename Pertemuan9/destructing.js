// membuat object literal
const user = {
    nama: "sina",
    umur: 15,
    alamat: "Depok",
};

const nama = user.nama;
const umur = user.umur;
const alamat = user.alamat;

console.log(nama, umur, alamat);

// membuat object literal
const user2 = {
    nama2: "Zoro",
    umur2: 25,
    alamat2: "Bogor",
};

const {nama2, umur2, alamat2} = user2;

console.log(nama2, umur2, alamat2);

// membuat array family
const family = ["Mikel", "Hana", "Cici", "Rem"];

const husband = family[0];
const wife = family[1];
const firstChild = family[2];
const lastChild = family[3];

console.log(husband, wife, firstChild, lastChild);