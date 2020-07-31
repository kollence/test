function levaRotacija(niz, brojRotacija){

  for(let i=0; i < brojRotacija; i++){
    const newarr = niz.pop()
    niz.unshift(newarr)
    console.log(niz)
  }
}
const arr = [1,2,3,4,5]
levaRotacija(arr, 2)