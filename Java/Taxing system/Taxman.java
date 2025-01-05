// Assuming you are working in a private or public sector, you are entitled to a
// salary which has to be taxed based on the following two categories (Intern and
// Employee) below. 
// Write a Java program that is interactive with the user. The
// program should prompt the user for the following: - Name of worker -Salary -
// Gender of Student (Male or Female) -Category (Intern or Employee)
// The program should then display the details entered and display the tax the
// worker is supposed to pay. Use switch case and nested if/else in the same
// program.

import java.util.*;

public class Taxman{



    public static void main(String[] args){
        Scanner input = new Scanner(System.in);
        final double MIN_TAX_RATE = 0.10;
        final double MID_TAX_RATE = 0.15;
        final double MAX_TAX_RATE = 0.28;
        double tax_due = 0;

        System.out.println("Enter your name");
        String name = input.nextLine();
        System.out.println("Enter your salary");
        int salary = input.nextInt();
        input.nextLine();
        System.out.println("Enter your gender");
        String gender = input.nextLine();
        System.out.println("Select category:\n1. Intern\n2. Employee");
        int cat = input.nextInt();

        switch (cat) {
            case 1:
                if (salary<=8350) {
                    tax_due = salary * MIN_TAX_RATE;
                }
                else if(salary<=33950){
                    tax_due = salary * MID_TAX_RATE;
                }
                else if (salary<=82250) {
                    tax_due = salary * MAX_TAX_RATE;
                }
                break;
            case 2:
                if (salary<=16700) {
                    tax_due = salary * MIN_TAX_RATE;
                }
                else if(salary<=33950){
                    tax_due = salary * MID_TAX_RATE;
                }
                else if (salary<=137050) {
                    tax_due = salary * MAX_TAX_RATE;
                }
                break;
            default:
                System.out.println("Invalid category!");
                break;
        }
        System.out.println("NAME: "+name);
        System.out.println("SALARY: "+salary);
        System.out.println("GENDER: "+gender);
        System.out.println(cat==1?"Intern":"Employee");
        System.out.println("TAX DUE: "+tax_due);
    }
}