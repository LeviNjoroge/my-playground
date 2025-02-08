// import java.util.*;
import javax.swing.JOptionPane;

public class UnitConvertorGUI {
    public static void main(String[] args) {

        while (true) {
            int category = Integer.parseInt(JOptionPane.showInputDialog(null, "Welcome to the unit converter!\nSelect a unit category:\n1. Length. \n2. Weight. \n3. Temperature."));
            switch(category){
                case 1:
                    JOptionPane.showMessageDialog(null, "The result is: "+lenConversion());
                    break;
                case 2:
                    JOptionPane.showMessageDialog(null, "The result is: "+weightConvertor());
                    break;
                case 3:
                    JOptionPane.showMessageDialog(null, "The result is: "+temperatureConverter());
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Invalid option chosen!");
                    break;
            }
        }
    }

    static double lenConversion(){

        final double INCHES_TO_CENTIMETERS = 2.54;
        final double METERS_TO_FEET = 3.281;

        
        int option = Integer.parseInt(JOptionPane.showInputDialog(null, "Select an option: \n"+
        "1. Centimeters to meters.\n" +
        "2. Meters to centimeters.\n" +
        "3. Centimeters to inches.\n" +
        "4. Inches to Centimeters\n" +
        "5. Meters to feet.\n" +
        "6. Feet to Meters"));

        System.out.println("Enter the value to convert: ");
        double value = Double.parseInt(JOptionPane.showInputDialog(null,

        switch (option) {
            case 1:
                return value/100;
            case 2:
                return value*100;
            case 3:
                return value/INCHES_TO_CENTIMETERS;
            case 4: 
                return value*INCHES_TO_CENTIMETERS;
            case 5: 
                return value*METERS_TO_FEET;
            case 6:
                return value/METERS_TO_FEET;
            default:
                System.out.println("Invalid selection!");
                return 0;
                }
    }

    static double weightConvertor(){

        final double KG_TO_LBS = 2.205;
        
        System.out.println("Select an option:\n"+
            "1. Kilograms to Pounds.\n"+
            "2. Pounds to Kilograms.\n"
            );
        int option = input.nextInt();

        System.out.println("Enter the value to convert: ");
        double value = input.nextInt();

        switch (option) {
            case 1:
                return value*KG_TO_LBS;
            case 2:
                return value/KG_TO_LBS;
            default:
                System.out.println("Invalid option chosen!");
                return 0;
        }
    }

    static double temperatureConverter(){
        final double Celsius_TO_Kelvins = 273.5;
        System.out.println("Select an option: \n"+
            "1. Degree Celsius to Kelvin\n"+
            "2. Kelvin to Degree Celsius\n"+
            "3. Degree Celsius to Fahrenheit\n"+
            "4. Fahrenheit to Degree Celsius\n"
            );
        int option = input.nextInt();
        System.out.println("Enter the temperature value: ");
        double value = input.nextInt();
        switch (option) {
            case 1:
                return value + Celsius_TO_Kelvins;
            case 2: 
                return value - Celsius_TO_Kelvins;
            case 3: 
                return (value * 9/5) + 32;
            case 4:
                return (value/4.5)-32;
            default:
                System.out.println("Invalid option chosen!");
                return 0;
        }
    }
}