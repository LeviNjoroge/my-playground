
package simple_Calculator;

import java.util.Scanner;


public class Main {
	public static void main(String[] args) {
		
		Scanner input = new Scanner(System.in);
		
		System.out.println("Enter the first number: ");
		int num1 = input.nextInt();
		
		System.out.println("Enter the second number: ");
		int num2 = input.nextInt();
		
		System.out.println("Sum: "+Addition.add(num1, num2));
		System.out.println("Subtraction: "+Subtraction.subtract(num1, num2));
		
	}
}
