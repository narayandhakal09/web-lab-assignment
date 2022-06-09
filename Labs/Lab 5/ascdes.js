document.getElementById('title').innerHTML = 'asc des';
const input = prompt('Enter "a" for ascending :: d for descenging ');
if (input == 'a' || input == 'A') {
    ascending();
}
else { descending(); }
    





let final = [3, 4, 1, 2, 5, 6, 7];
let temp;
function ascending() {
    
    for (let j = 0; j < final.length - 1; j++) {
        for (let k = j + 1; k < final.length; k++) {
            if (final[j] > final[k]) {
                temp = final[j];
                final[j] = final[k];
                final[k] = temp;
            }
        }
    
    }
    
        console.log(final);
    
}
descending();


function descending() {
    

    for (let j = 0; j < final.length - 1; j++) {
        for (let k = j + 1; k < final.length; k++) {
            if (final[j] < final[k]) {
                temp = final[j];
                final[j] = final[k];
                final[k] = temp;
            }
        }
    
    }
    
        console.log(final);
   
}