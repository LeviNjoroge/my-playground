// Assuming you are working in a private or public sector, you are entitled to a
// salary which has to be taxed based on the following two categories (Intern and
// Employee) below. 
// Write a Java program that is interactive with the user. The
// program should prompt the user for the following: - Name of worker -Salary -
// Gender of Student (Male or Female) -Category (Intern or Employee)
// The program should then display the details entered and display the tax the
// worker is supposed to pay. Use switch case and nested if/else in the same
// program.

import javax.swing.JOptionPane;

public class Taxman_GUI{

    public static void main(String[] args){
        final double MIN_TAX_RATE = 0.10;
        final double MID_TAX_RATE = 0.15;
        final double MAX_TAX_RATE = 0.28;
        double tax_due = 0;

        String name = JOptionPane.showInputDialog("Enter your name");
        int salary = Integer.parseInt(JOptionPane.showInputDialog("Enter your salary"));
        String gender = JOptionPane.showInputDialog("Enter your gender");
        int cat = Integer.parseInt(JOptionPane.showInputDialog("Select category:\n1. Intern\n2. Employee"));

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
                JOptionPane.showMessageDialog(null, "Invalid category!");
                break;
        }
        JOptionPane.showMessageDialog(null, "NAME: "+name+"\nSALARY: "+salary+"\nGENDER: "+gender+(cat==1?"\nIntern":"\nEmployee")+"\nTAX DUE: "+tax_due );
    }
}