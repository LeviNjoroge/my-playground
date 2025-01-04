import java.util.*;

public class Average{

    public static void main(String[] args){
        final int no_of_iterations = 10;
        int sum = 0;
        Scanner input = new Scanner(System.in);
        
        for(int i=0; i<no_of_iterations; i++){
            System.out.println("Enter a number: ");
            int number = input.nextInt();
            sum += number;
        }

        System.out.println("The average is: " + sum/no_of_iterations);
    }
}