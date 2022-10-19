function selectionSort(inputArr) { 
    let n = inputArr.length;
        
    for(let i = 0; i < n; i++) { // O(n)
        let min = i; // O(1)
        for(let j = i+1; j < n; j++){ // O(n)
            if(inputArr[j] < inputArr[min]) { // O(1)
                min=j; // O(1)
            }
         }
         if (min != i) { // O(1)
             let tmp = inputArr[i]; // O(1)
             inputArr[i] = inputArr[min]; // O(1)
             inputArr[min] = tmp; // O(1)
        }
    }
    return inputArr;
}

// COMPLEXIDADE: O(n²)
// O(n) * O(n) = O(n²) --> ignorando as constantes O(1)
