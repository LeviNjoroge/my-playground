// Write a Java program that captures and stores 12 monthly company sales
// values in an array, computes the total sales for the year, outputs the 12 monthly
// sales and the annual total

import java.util.*;

public class Main {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int[] values = new int[12];
        int sum = 0;

        for(int i = 0; i<12;i++){
            System.out.println("Enter the sales value for month "+(i+1));
            int value = input.nextInt();
            values[i] = value;
            sum += value;
        }

        for(int i = 0; i<10; i++){
            System.out.println("Value for month "+(i+1)+" is "+values[i]);
        }

        System.out.println("\nThe annual total is: "+sum);
    }
}