package main

import (
	"fmt"
	"math/rand"
	"time"
)

func main() {

  slice := generateSlice(20) // O(1)
  selectionsort(slice) // O(1)
}

func generateSlice(size int) []int {

	slice := make([]int, size, size) // O(1)
	rand.Seed(time.Now().UnixNano()) // O(1)
	for i := 0; i < size; i++ { // O(n)
		slice[i] = rand.Intn(999) - rand.Intn(999) // O(1)
	}
	return slice 
}
 
func selectionsort(items []int) {
    var n = len(items) // O(1)
    for i := 0; i < n; i++ { // O(n)
        var minIdx = i // O(1)
        for j := i; j < n; j++ { // O(n)
            if items[j] < items[minIdx] { // O(1)
                minIdx = j // O(1)
            }
        }
        items[i], items[minIdx] = items[minIdx], items[i] // O(1)
    }
}
