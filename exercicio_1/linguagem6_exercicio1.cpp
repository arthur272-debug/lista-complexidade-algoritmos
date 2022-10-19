int soma_valores(int x){

int soma=0; // O(1)

for(int i=0;i<=x;++i) // O(n)
    soma+=i; // O(1)

return soma;
}

// complexidade: O(n)
// O(1) + O(n) + O(1) = O(n)
