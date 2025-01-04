// Develop a java program that captures a loan applicant’s salary and number of
// years in employment. The program should sent the message “You qualify for a
// loan” if the applicant earns over Ksh. 20,000 and has been in employment for at
// least 3 years, otherwise, the program should sent an appropriate loan
// application rejection message.

import java.util.*;

public class Loan_Eligibility{

    public static void main(String []args){
        Scanner input = new Scanner(System.in);
        System.out.println("Enter your salary: ");
        int salary = input.nextInt();
        System.out.println("For how many years have you been in employment?\nEnter value in years:  ");
        int employment_duration = input.nextInt();

        Eligibility_test.Test(salary, employment_duration);
    }
}
