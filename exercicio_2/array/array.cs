using System;
using System.Diagnostics;
using System.Threading;
 
//Complexidade - O(1)
//O(1)+O(1)+O(1)+O(1)+O(1)+O(1)+O(1)+O(1)+O(1)+O(1)= 10 O(1) = O(1) 

public class Example
{
    public static void Main()
    {
        Stopwatch stopwatch = new Stopwatch();
 
        stopwatch.Start();

      int[] numeros = new int[5];
			numeros[0] = 2;
			numeros[1] = 4;
			numeros[2] = 15;
			numeros[3] = 11;
			numeros[4] = 2; // meu vetor acaba aqui.
			// numeros[5] = 2; não daria mais certo, mas o índice 5 já está fora do limite do vetor.

			Console.WriteLine("Eu sou o número da posição 0: " + numeros[0]);  
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[1]);  
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[2]);  
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[3]);  
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[4]);  
        stopwatch.Stop();
 
        Console.WriteLine("Elapsed Time is {0} ms", stopwatch.ElapsedMilliseconds);
    }
}
