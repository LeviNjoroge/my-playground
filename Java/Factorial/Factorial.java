
import java.math.BigInteger;
import java.util.*;

public class Factorial {
    
    public static void main (String[] args){
        Scanner input = new Scanner(System.in);

        System.out.println("Enter a nonnegative integer: ");
        int number = input.nextInt();

        long result = 1;

        if (number==0) {
            result = 1;
        }
        else{
            for(int i = 1; i<=number; i++){
                result *=i;
            }
        }
        System.out.println(number+" factorial is: "+result);

        // randoms(); //to print out factorials of the first 100 integers
    }


    public static void randoms() {
        for (int j = 1; j < 100; j++) {
            BigInteger result = BigInteger.ONE; // Initialize result to 1 for each factorial
            for (int i = 1; i <= j; i++) {
                result = result.multiply(BigInteger.valueOf(i)); // Multiply by the current number
            }
            System.out.println(j + " factorial is: " + result); // Print the factorial
        }
    }

}
