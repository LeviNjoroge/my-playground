import java.util.*;

public class Main {

    static Scanner input = new Scanner(System.in);

    public static void main(String[] args) {
        
        double result = 0;
        System.out.println("Welcome to the unit converter!\nSelect category:\n1. Length. \n2. Weight. \n3. Temperature. ");
        int category = input.nextInt();
        switch(category){
            case 1:
            lenConversion();
            break;
        }
    }

    static double lenConversion(){

        const double CENTIMETERS_TO_INCHES = 2.54;
        System.out.println("Choose an option: \n"+
                                        "1. Centimeters to meters.\n" +
                                        "2. Meters to centimeters\n" +
                                        "3. Centimeters to inches.\n" +
                                        "4. Inches to Centimeters\n" +
                                        "5. Meters to feet\n" +
                                        "6. Feet to Meters");
        int option = input.nextInt();
        System.out.println("Enter the value to convert: ");
        int value = input.nextInt();
        switch (option) {
            case 1:
                return value/100;
            case 2:
                return value*100;
            case 3:
                return value/CENTIMETERS_TO_INCHES;
            case 4: 
                return value*CENTIMETERS_TO_INCHES;
            case
            default:
                break;
                }
    }
}