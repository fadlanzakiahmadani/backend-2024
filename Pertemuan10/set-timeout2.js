console.log("Sina membuka browser Chrome");

/**
 * setTimeout salah satu operasi Asynchronous.
 * fungsi setTimeout tidak mencegah operasi selanjutnya.
 * callback otomatis dijalankan setelah 5 detik.
 */
setTimeout(()=>{
    console.log("Mendowload file selama 1 jam");
    console.log("Download selesai");
}, 5000);

console.log("Sina membuka Youtube")