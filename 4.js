function find_pair(arr) {
    const object = {};
    const result = [];

    arr.forEach(item => {
      if(!object[item])
          object[item] = 0;
        object[item] += 1;
    })

    for (const prop in object) {
       if(object[prop] >= 2) {
           result.push(prop);
       }
    }

    return result.length;

}

console.log(find_pair([1,5,5,10,9,13,5,1]));
console.log(find_pair([20,50,70,10,70,30,10,30,50]));