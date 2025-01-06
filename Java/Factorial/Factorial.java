import java.util.*;

public class Factorial {
    
    public static void main (String[] args){
        Scanner input = new Scanner(System.in);

        System.out.println("Enter a nonnegative integer: ");
        int number = input.nextInt();

        int result = 1;

        if (number==0) {
            result = 1;
        }
        else{
            for(int i = 1; i<=number; i++){
                result *=i;
            }
        }
        System.out.println(number+" factorial is: "+result);
    }

}
