import java.util.*;

public class Main {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        
        int result = 0;
        System.out.println("Welcome to the unit converter!\nSelect category:\n1. Length. \n2. Weight. \n3. Temperature. ");
        int category = input.nextInt();
        switch(category){
            case 1: 
            {
                System.out.println("Choose an option: \n"+
                                        "1. Centimeters to meters.\n" +
                                        "2. Meters to centimeters\n" +
                                        "3. Centimeters to inches.\n" +
                                        "4. Inches to Centimeters\n" +
                                        "5. Meters to feet\n" +
                                        "6. Feet to Meters");
                int option = input.nextInt();
                switch (option) {
                    case 1:
                        System.out.println("Enter the value in centimeters to convert: ");
                        int value = input.nextInt();
                        result = value/100;
                        break;
                
                    default:
                        break;
                }
            }
            break;
        }
    }
}