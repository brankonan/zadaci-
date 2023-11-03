//zadatak6
function pronadji5(niz) {
  for (let i = 0; i < niz.length; niz++) {
    if (niz[i] === 5) {
      return "broj se nalazi na poziciji" + i;
    }
  }
}
const niz1 = [1, 2, 3, 4, 5, 6, 7];
const niz2 = [1, 2, 3];

console.log(pronadji5(niz1));
console.log(pronadji5(niz2));

//zadatak7

function drugiNajveci(niz) {
  niz.sort();
  //   [4, 1, 2] =? [1, 2, 4]
  return niz[niz.length - 2];
}

let niz = [12, 35, 1, 10, 34, 1];
drugiNajveci(niz);

//zadatak8

function sviParovi(){
    
}