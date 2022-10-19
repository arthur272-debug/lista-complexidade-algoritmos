public class Program  // O(1)
{
	public static void Main()
	{
			int[] numeros = new int[5];
			numeros[0] = 2;
			numeros[1] = 4;
			numeros[2] = 15;
			numeros[3] = 11;
			numeros[4] = 2; // meu vetor acaba aqui.
			// numeros[5] = 2; não daria mais certo, mas o índice 5 já está fora do limite do vetor.

			Console.WriteLine("Eu sou o número da posição 0: " + numeros[0]);  // irá exibir 2
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[1]);  // irá exibir 4
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[2]);  // irá exibir 15
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[3]);  // irá exibir 11
			Console.WriteLine("Eu sou o número da posição 0: " + numeros[4]);  // irá exibir 2
	}
