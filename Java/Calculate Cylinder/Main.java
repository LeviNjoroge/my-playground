// Write a java method named calculateCylinder that will ask the user for the height and radius of a
// cylinder and then print out the volume of the cylinder (2πr 2h). You may use the value 3.14159 or the
// constant Math.PI in your method.

import java.util.*;

public class Main{

    public static void main(String[] args){
        calculateCylinder();
    }

    static void calculateCylinder(){
        Scanner input = new Scanner(System.in);

        System.out.println("Enter the height of the cylinder: ");
        double height = input.nextDouble();
        System.out.println("Enter the radius of the cylinder: ");
        double radius = input.nextDouble();

        double volume = Math.PI*radius*radius*height;

        System.out.println("The volume of the cylinder is: "+volume);
    }

}