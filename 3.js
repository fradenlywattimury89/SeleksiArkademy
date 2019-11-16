function cek_kata(string){
    
    var jumlah_kata = string.split(' ').length;
    
    var regex = /[0-9]/g;
    
    var filter_kata = string.match(regex);

    if(filter_kata == null){
        var hasil = jumlah_kata;
    } else {
        var hasil = jumlah_kata - filter_kata.length; 
    }

    return hasil+'/'+jumlah_kata;
}


console.log(cek_kata('5 pasang sandal hilang'));
console.log(cek_kata('coba pasang sandal hilang'));